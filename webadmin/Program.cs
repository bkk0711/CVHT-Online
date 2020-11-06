using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace hgbaotest
{
    class Program
    {

        public static string Encipher(string input, int key)
        {
            string output = null;
            foreach (char ch in input)
                output += cipher(ch, key);
            return output;
        }
        public static string Decipher(string input, int key)
        {
            return Encipher(input, 26 - key);
        }
        public static char cipher(char ch, int key)
        {
            if (!char.IsLetter(ch))
            {
                return ch;
            }
            char d = char.IsUpper(ch) ? 'A' : 'a';
            return (char)((((ch + key) - d) % 26) + d);
        }
        static void Main(string[] args)
        {
            int i, j, sum = 0, end = 0;
            int[,] mtrx = new int[25, 25];
            int[,] ans = new int[25, 1];
            string text = "";
            char[] txt = text.ToCharArray();
            end = txt.Length;
            
            for(i= object;i< end;i++)
            {
                txt[i] = Convert.ToChar(txt[i] - 'a');
            }
            Random rnd = new Random();
            for(i-0;i< end;i++)
            {
                for(j=0;j< end;j++)
                {
                    mtrx[i, j] = rnd.Next();
                }
            }
            for(i=0;i< end;i++)
            {
                sum = 0;
                for(j=0;j< end;j++)
                {
                    sum += mtrx[i, j] * (int)txt[j];
                }
                ans[i, 0] = sum;
            }
            Console.Write("Ket qua ma hoa:");
            for(i=0;i< end;i++)
            {
                char cipher = (char)(((ans[i, 0]) % 26) + 97);
                Console.Write("\t" + cipher);
            }
        //    {
        //        Console.WriteLine(" Chon 1 trong 2: 1/Ma Hoa_2/Giai Ma");
        //        string input = Console.ReadLine();
        //        int i = int.Parse(input);
        //        if (i == 1)
        //        {
        //            Console.WriteLine("Nhap Chuoi A: ");
        //            string plantext = Console.ReadLine();
        //            Console.WriteLine("Nhap Khoa K: ");
        //            int k = int.Parse(Console.ReadLine());
        //            Console.WriteLine(Encipher(plantext, k));

        //        }
        //        else if (i == 2)
        //        {
        //            Console.WriteLine("Nhap Chuoi A: ");
        //            string plantext = Console.ReadLine();
        //            Console.WriteLine("Nhap Khoa K: ");
        //            int k = int.Parse(Console.ReadLine());
        //            Console.WriteLine(Decipher(plantext, k));
        //        }
        //        Console.ReadKey();

        //    }
        }
    }
}

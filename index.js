'use strict';
const BootBot = require('bootbot');
var mysql = require('mysql');

var conn = mysql.createConnection({
  host    : 'localhost',
  user    : 'root',
  password: 'mysql',
  database: 'cvht'
});

conn.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

const bot = new BootBot({
  accessToken: 'EABBYTTijjIABAA9R9FvZBiSin0Ht4eQzQmlCOWhHqZAJAwTGZC6mKZA14OjpWEqZB6WiYWNya3TSIzZAa3ZB9ICfwKzTyClyrjrdncMF6wh10w2StgqotzcztBpv6lYsz8ZBBgBgizSCDoYuk6pPJQCSZAgrO22pW3OZCO3l5pAr1npgZDZD',
  verifyToken: 'covanhoctap',
  appSecret: '7b8270f3d08d81c366b7f8b5a6df64cc'
});


bot.on('message', (payload, chat) => {
	console.log('ban nhan duoc tin nhan');
});

bot.on('attachment', (payload, chat) => {
	console.log('ban nhan duoc file dinh kem');
});

bot.hear('hello', (payload, chat) => {
  chat.getUserProfile().then((user) => {
    chat.say(`Chào, ${user.first_name}!`);
  });
});
bot.on('message', (payload, chat) => {
  const text = payload.message.text;
  chat.getUserProfile().then((user) => {
  chat.say(`Bạn nhắn: ${text}`);  
  console.log(`Người Gửi : ${user.first_name}`);
  console.log(`Nội dung : ${text}`);
  }); 
});

bot.start();
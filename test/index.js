'use strict';
const BootBot = require('bootbot');
var mysql = require('mysql');

var conn = mysql.createConnection({
  host    : 'localhost',
  user    : 'root',
  password: 'mysql',
  database: 'cvht'
});
const {Wit, log} = require('node-wit');

const client = new Wit({
  accessToken: '47NT7G3HFCU7DNVPAT7WZAGXPKGMUYNY',
  logger: new log.Logger(log.DEBUG) // optional
});

conn.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

const bot = new BootBot({
  accessToken: 'EABBYTTijjIABABQF87Iy6PnsYl8RDek4Pcz8M7tS6GJbWr807QUkcArEIwwLE8jrthDJwfDUuVszs9RZAnAkXYFriIf2Iey1MLcXFDMjT9qZCbSlxFQZCXVblSZChGXW8N56aS3lZBVwrm1Mb3ZC4VnrbEELZAXgV01i4k4EUXijQZDZD',
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
bot.hear('Bắt Đầu', (payload, chat) => {
  chat.getUserProfile().then((user) => {
    chat.say(`Chào, ${user.first_name}!`);
  });
});
bot.hear(['help'], (payload, chat) => {
	// Send a text message with buttons
	chat.say({
		text: 'What do you need help with?',
		buttons: [
			{ type: 'postback', title: 'Settings', payload: 'HELP_SETTINGS' },
			{ type: 'postback', title: 'FAQ', payload: 'HELP_FAQ' },
			{ type: 'postback', title: 'Talk to a human', payload: 'HELP_HUMAN' }
		]
	});
});
bot.on('postback:HELP_HUMAN', (payload, chat) => {
  chat.say(`admin se som tra loi ban`);  
	console.log('The Help Me button was clicked!');
});
bot.on('message', (payload, chat) => {
  const text = payload.message.text;
  chat.getUserProfile().then((user) => {
  chat.say(`Bạn nhắn: ${text}`);  
  console.log(client.message(text));
  console.log(`Người Gửi : ${user.first_name}`);
  console.log(`Nội dung : ${text}`);
  }); 
});

bot.start();
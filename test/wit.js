const {Wit, log} = require('node-wit');

const client = new Wit({
  accessToken: '47NT7G3HFCU7DNVPAT7WZAGXPKGMUYNY',
  logger: new log.Logger(log.DEBUG) // optional
});

console.log(client.message('set an alarm tomorrow at 7am'))
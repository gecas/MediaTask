var io = require('socket.io')(6001);

var Redis = require('redis');
var redis = Redis.createClient();

redis.subscribe('advert');

io.on('connection', function(socket){
    console.log('New connection: '+socket.id);
});

redis.on('message', function(channel, messageStr){
    var message = JSON.parse(messageStr);
    io.emit('message', message);
});


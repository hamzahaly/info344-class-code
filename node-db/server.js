'use strict';

var express = require('express');
var morgan = require('morgan');
var bodyParser = require('body-parser');
var mysql = require('mysql');
var dbConfig = require('./secret/config-maria.json');
var bluebird = require('bluebird');

//Create a conneciton pool to handle concurrent requests to the db
var connPool = bluebird.promisifyAll(mysql.createPool(dbConfig));

var storiesApi = require('./controllers/stories-api.js');
var Story = require('./models/story.js').Model(connPool);

//Create the express application
var app = express();

app.use(morgan('dev'));
app.use(bodyParser.json());

app.use(express.static(__dirname + '/static'));

app.use('/api/v1', storiesApi.Router(Story));

app.listen(80, function() {
	console.log('server is listening...');
});



//  npm install -g cnpm --registry=https://registry.npmmirror.com
//  npm install mysql koa koa-router
//cnpm install mysql
const { strictEqual } = require('assert');
const Koa = require('koa');
const Router = require('koa-router');
const mysql = require('mysql');
const { isArgumentsObject } = require('util/types');


const{ exec} = require('./mysql');


 
 
sql ='SELECT id, firstname, lastname FROM MyGuests';
exec(sql).then(rows => {
   console.log(rows[0])
  
})


return;
const app = new Koa();
const router = new Router();

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'hmk123',
  database : 'test'
});
 
connection.connect();
 
 exports.getData = function (){

            connection.query('SELECT id, firstname, lastname FROM MyGuests', function (error, results, fields) {
            if (error) throw error;
            let da= results[0];
            console.log('The solution is: ', results[0]["firstname"]);
            console.log(da["firstname"]);
           
return da;
})
}
//connection.end();


console.log(arguments);

router.get('/', ctx => {

 
 
   ctx.body="123";
     
     
  })
  app.use(router.routes());
  
  app.listen(3000);
   
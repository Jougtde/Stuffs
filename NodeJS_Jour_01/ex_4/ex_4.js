var fs = require('fs');
function createFiles(arg)
{    for( var i = 1; i <= arg; i++)
   {
      fs.writeFile("./garbage/" + i, "", 'utf8', function (err){
         if(err) {
            return console.log('Error: Critical failure');
         }
      });
      console.log('Created file ' + i);
   }
}

var deleteFolderRecursive = function(path) {

   fs.exists(path, function(exists) {
      if(exists) {

         fs.readdir(path, function(err, files) {
            files.forEach(function(file,index) {

               var curPath = path + "/" + file;

               fs.lstat(curPath, function(err, stats){
                  if(stats.isDirectory()) { // recurse
                     deleteFolderRecursive(curPath);
                  } else { // delete file
                     fs.unlink(curPath);
                  } // if
               })

            });
            createFiles(process.argv[2]);
         }); // fs.readdir
      }
      else {
         createFiles(process.argv[2]);
      }

   }); // fs.exists

}; // function(path)

if (process.argv[2] == null || !isNaN(process.argv[2]))
{    var dir = './garbage';

fs.exists(dir, function (exists) {
   if (!exists) {
      fs.mkdir(dir, function(){
         createFiles(process.argv[2]);
      });
   }
   else {
      deleteFolderRecursive(dir);
   }
})
}

console.log('Done');

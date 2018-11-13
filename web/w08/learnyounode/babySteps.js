for (var i = 2, sum = 0; i < (process.argv).length; sum += Number(process.argv[i++]));
console.log(sum);
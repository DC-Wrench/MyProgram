const express = require("express");
const app = express();
const PORT = 3000;

app.use(express.static("public"));

app.get('/',(req,res)=>{
	res.send("Wlcome to my Kali Linux Node.js Website");
});

app.listen(PORT,()=>{
	console.log(`server is runing on http://localhost:${PORT}`);
});

app.listen(PORT,"0.0.0.0",()=>{
	console.log(`server is runing on http://192.168.43.2:${PORT}`);
});

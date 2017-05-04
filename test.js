function p(name) {
	return new Promise((resolve, reject) => {
		console.log('Promise', name);
		setTimeout(() => {
			resolve('data')
		}, 5000)
	})
}

let a = async function () {
	console.log('start function a');
	let ctx = this;
	let data1 = await p('a1');
	let data2 = await p('a2');
	let data3 = await p('a3');
	ctx.data = data3;
	console.log('function a:', data3);
	return data3;
}

let b = async (ctx) => {
	console.log('start function b');
	let data = await a.call(ctx);
	console.log(data, ctx.data)
}

var context = {
	m: 100
}

b(context)
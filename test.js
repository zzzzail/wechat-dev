function p(name) {
	return new Promise((resolve, reject) => {
		console.log(name);
		setTimeout(() => {
			resolve('data')
		}, 10000)
	})
}

let a = async function () {
	console.log('start function a');
	let ctx = this;
	let data = await p('a');
	console.log('function a:', data);
}

let b = async (ctx) => {
	console.log('start function b');
	a.call(ctx);
	return false;
	let data = await p('b');
	console.log('function b:', data);
	console.log('done');
}

var context = {
	m: 100
}

b(context)
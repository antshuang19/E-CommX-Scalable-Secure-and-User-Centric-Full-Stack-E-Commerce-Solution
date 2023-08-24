
fetch("order.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output");
	let out = "";
    let name = localStorage.getItem('id')
	for(let product of products){
        if(product.username == name)
		{   out += `
			<tr>
				<td> <img src='${product.image}'> </td>
				<td>${product.product}</td>
				<td>${product.price}</td>
				<td>${product.id_order}</td>
			</tr>
		    `;
        }
	}

	placeholder.innerHTML = out;
});
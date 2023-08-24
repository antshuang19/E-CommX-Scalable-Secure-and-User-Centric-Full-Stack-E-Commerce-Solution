fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output");
	let out = "";
    
	for(let data of products){
        if(data.type =="shoes")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick = "getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});


fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output1");
	let out = "";
    
	for(let data of products){
        if(data.type =="men-clothes")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick ="getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});

fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output2");
	let out = "";
    
	for(let data of products){
        if(data.type =="women-clothes")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick ="getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});

fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output3");
	let out = "";
    
	for(let data of products){
        if(data.type =="bags")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick ="getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});

fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output4");
	let out = "";
    
	for(let data of products){
        if(data.type =="hats")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick ="getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});

fetch("all_product.json")
.then(function(response)
{
	return response.json();
})
.then(function(products)
{
	let placeholder = document.querySelector("#data-output5");
	let out = "";
    
	for(let data of products){
        if(data.type =="glasses")
		   out += `
			    <div class="pro">
                <a id= '${data.id}' onclick ="getId(this)"><img src ='${data.image}' alt="">
                    <div class="des">
                        <h5></h5>${data.name}</h5>
                        <h4>￥${data.price}</h4>
                    </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
		    `;
        
	}

	placeholder.innerHTML = out;
});

function getId(btn)
{
	localStorage.setItem('id',btn.id);
	window.location.href = "商品页面.php"
}
fetch("product.json");
const decreaseNumber1 = (incdec, totalprice) => {
  
  var itemval = document.getElementById(incdec);
  var totalprice = document.getElementById(totalprice);
  // var totalprice2 = document.getElementById('total_price2')
  var itemprice = document.getElementById("item_price1");
  //  var itemprice2 = document.getElementById('item_price2')
  var sub_total = document.getElementById("sub_total");
  var grand_total = document.getElementById("grand-total");
  var tax = document.getElementById("tax");
  
  if (itemval.value <= 0) {
    alert("Negative value not allowed");
    itemval.value = 0;
  } else {
    itemval.value = parseInt(itemval.value) - 1;
    itemval.style.background = "#fff";
    itemval.style.color = "black";
    //totalprice.innerText =parseInt(totalprice.innerText ) - 300
    totalprice.innerText =
      parseInt(totalprice.innerText) - parseInt(itemprice.innerText);
    // totalprice2.innerText =parseInt(totalprice2.innerText ) - parseInt(itemprice2.innerText )
    sub_total.innerText =
      parseInt(sub_total.innerText) - parseInt(itemprice.innerText);
    grand_total.innerText =
      parseInt(sub_total.innerText) + parseInt(tax.innerText);
      // console.log(item.numberOfUnits)
  }

};


const increaseNumber = (incdec, totalprice) => {
  var itemval = document.getElementById(incdec);
  var totalprice = document.getElementById(totalprice);
  // var totalprice2 = document.getElementById('total_price2')
  var itemprice = document.getElementById("item_price1");
  var sub_total = document.getElementById("sub_total");
  var grand_total = document.getElementById("grand-total");
  var tax = document.getElementById("tax");

  if (itemval.value >= 5) {
    itemval.value = 5;
    alert("Maximum quantity allowed is 5");
    itemval.style.background = "red";
    itemval.style.color = "#fff";
  } else {
    itemval.value = parseInt(itemval.value) + 1;
    //totalprice.innerText = parseInt(totalprice.innerText) + 300
    totalprice.innerText =
      parseInt(totalprice.innerText) + parseInt(itemprice.innerText);
    // totalprice2.innerText =parseInt(totalprice2.innerText ) + parseInt(itemprice2.innerText )
    sub_total.innerText =
      parseInt(sub_total.innerText) + parseInt(itemprice.innerText);
    grand_total.innerText =
      parseInt(sub_total.innerText) + parseInt(tax.innerText);
  }
};

const productsEl = document.querySelector(".small-cont");
const cartItemsEl = document.querySelector(".tb-row");
const adtc = document.querySelectorAll(".add-tocart")

function renderProducts() {
  products.forEach((product) => {
    productsEl.innerHTML += `
        
        <div class="cl-1">
         <img src="${product.imgSrc}" alt="${product.name}">
         <h4>${product.name}</h4>   
         <p>${product.price}</p>
         <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o" ></i>
         </div>
         <input type="button" class="add-tocart" onclick="addtoCart(${product.id})" value="Add to Cart">
      </div>
        
        `;
  });
}
// // renderProducts();
Array.from(adtc).forEach(b => {
  b.addEventListener("click", function(e) {
    e.preventDefault()
    addtoCart()
  });
});
let cart = [];
function addtoCart(id) {
  // const cart = Object.create(null);
  // const item = [...document.querySelectorAll('.item')];
  if (cart.some((item) => item.id === id)) {
    alert("This product is already in the cart")
  } else {
    const item = products.find((product) => product.id === id);

    cart.push({
      ...item,
      numberOfUnits: 1,
    });
  // console.log(cart)

  }
  updateCart();
}

function updateCart() {
//  increaseNumber()
//  decreaseNumber1()
rencartItems()
}

function rencartItems() {
 
  cartItemsEl.innerHTML =""; //clear cart items
  cart.forEach((item) => {
    cartItemsEl.innerHTML += `
    <div class="cart-page bg-white" style="background-color: white;">
    <table>
       <tr id="table_row">
          <th>Product</th>
          <th id="qua">Quantity</th>
          <th>Sub Total</th>
       </tr>
       <tr class="tb-row">
          <td>
          <div class="cart-info">
          <img src="${item.imgSrc}" alt="${item.name}">
          
          <div id="para">
          <p>${item.name}</p>
          <p> Rs<span id="item_price1">${item.price}</span></p>
             <a class="btn-danger" href="">Remove</a>
          </div>
       </div>
          </td>
         <td class="quantity_table">
          <button class="page-link" onclick="decreaseNumber1('quan-value','total_price')">
             <i class="fa fa-minus"></i>
          </button>
          <input type="text" class="page-link quantity" id="quan-value" value="0" >
          <button class="page-link" onclick="increaseNumber('quan-value','total_price')">
             <i class="fa fa-plus"></i>
          </button>
         </td>
          <td>Rs <span id="total_price">0</span></td>
       </tr>    
    </table>
    <div class="total-price">
       <table>
          <tr>
             <td>Sub Total</td>
             <td>Rs <span id="sub_total">${sub_total}</span></td>
          </tr>
          <tr>
             <td>Tax</td>
             <td>Rs <span id="tax">${tax}</span></td>
          </tr>
          <tr>
             <td>Total</td>
             <td>Rs <span id="grand-total">${grand_total}</span></td>
          </tr>
       </table>
     </div>
  </div>
  
     
      `;
      // increaseNumber('incdec' , 'totalprice')
      // decreaseNumber1('incdec' , 'totalprice' )
  });
}
// cart

// function changeNUmberOfUnits(action , id){
//   cart = cart.map((item)=>{
//     let numberOfUnits = item.numberOfUnits;

//     if(item.id === id){
//       if(action === "minus" && numberOfUnits >1){
//         numberOfUnits--;
//       }
  
//     else if (action === "plus" && numberOfUnits <=5){
//       numberOfUnits++;
//     }
//   }
//     return{
//       ...item,
//       numberOfUnits,
//     };
//   });
//   updateCart()
// }\

function changeNumber{
    increaseNumber(incdec , totalprice)
      decreaseNumber1(incdec,totalprice)
}

let cart = [];

// getting the products
class Products{
  async getProducts(){
      try {
       let result = await fetch('products.json');
       let data = await result.json();

       let products = data.items;
       products = products.map(item =>{
         const { title, price } = item.fields;
         const { id } = item.sys;
         const image = item.fields.image.fields.file.url
         return {title,price,id,image}
       })
        return products;      
      } catch (error) {
          console.log(error);
      }
  }
}

// display 
class UI {
    displayProducts(products) {
        let result = "";
        products.forEach((product) => {
            result += `
            <!-- single product   -->
        <article class="product">
            <div class="img-container">
                <img 
                src=${product.image}
                alt="product"
                class="product-img"
                />
                <button class="bag-btn" data-id=${product.id}>
                    <i class="fas fa-shopping-cart"></i>
                    Book Space
                </button>
            </div>
            <h3>${product.title}</h3>
            <h4>${product.price}</h4>
        </article> 
        <!-- end of single Item -->     
           `;
       });
        productsDOM.innerHTML = result;
    }

    getBagButtons(){
        const btns = document
    }
}
// local Storage
class Storage{
    static saveProducts(products){
        localStorage.setItem('products',JSON.stringify(products)); 
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const ui = new UI();
    const products = new Products();

    // get all products
    products.getProducts().then(products =>{
         ui.displayProducts(products); 
        Storage.saveProducts(products);
    }).then(()=>{
        ui.getBagButtons();
    });
});

var items = {};

// Close the avatar menu if the click is not onto the avatar logo
document.addEventListener("click", (event) => {
    var avatarMenu = document.getElementById("avatar-Check");
    var menu = document.getElementById("avatar-menu");
    var avatarImg =document.getElementById("avatar-img")
    if (event.target !== avatarMenu && event.target !== avatarImg) {
        menu.style.display = "";
        avatarMenu.checked = false;
    }
});

function addToCart(id, name, img, price) {
    var counter = document.getElementById('cart-counter');
    var cartContainer = document.getElementById('cart-containers');
    var total = document.getElementById('total-money-cart');


    cartContainer.classList.remove('hidden')


    counter.textContent = Number(counter.textContent) + 1;

    var item = document.createElement('div');
    item.classList.add('cart-item');
    item.id = 'cart-item-cont-' + id

    var itemImg = document.createElement('img');
    itemImg.src = img;
    itemImg.classList.add('cart-item-img');

    var itemText = document.createElement('div');
    itemText.classList.add('cart-item-text');

    var itemH3 = document.createElement('h3');
    itemH3.textContent = name;

    var itemP = document.createElement('p');
    itemP.textContent = items[name] + ' x ' + price + " EGP";
    itemP.id = 'cart-item-' + id ;

    var itemDel = document.createElement('button');
    itemDel.style.backgroundImage = 'url("/src/svg/x.svg")';
    itemDel.setAttribute("onclick", id)

    if (name in items) {
        items[name] += 1;
        var itemID = 'cart-item-' + id;
        var itemNum = document.getElementById(itemID);
        itemNum.textContent = items[name] + ' x ' + price + " EGP";
    } else {
        items[name] = 1;

        itemP.textContent = 1 + ' x ' + price + " EGP";

        itemText.appendChild(itemH3);
        itemText.appendChild(itemP);
        item.appendChild(itemImg);
        item.appendChild(itemText);
        item.appendChild(itemDel);
        cartContainer.appendChild(item);
    };

    var noProduct = document.getElementsByClassName('cart-empty');

    noProduct[0].style.display = "none"
    document.getElementById('check-btn').style.display = 'flex';
    document.getElementById('cart-btn').style.display = 'flex';
    document.getElementById('cont-shopping').style.display = 'none';

    
}
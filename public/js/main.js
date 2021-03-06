
//ფილტრი და დაპოსტვა 
$(document).ready(function(){
 $(".filter-button").click(function(){
    $("#demo").css("display", "none");
    $("#filter").toggle(500);
    });

$(".new-post-button").click(function(){
        $("#filter").css("display", "none");
        $("#demo").toggle(500);
        });





//ჩათის ჩაკეცვა და დახურვა
 $(".add-post-button").click(function(){
   $("#demo").toggle(500);
 });
 $(".filter-save-button").click(function(){
    $("#filter").toggle(500);
  });


  $(".list-item").click(function(){
    $(".abcd").toggleClass("msger-active");
     
});
  $(".list-item").click(function(){
    $(".msger").toggleClass("msger-active");
    $(".msger").removeClass("abcd");
    $(".msger").removeClass("height");
     
});


  $(".msger-header").click(function(){
    $(".msger").toggleClass("height");  
});
});





$(".messclose").click(function(){
    $(".msger").addClass("abcd");
    
});





const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

const BOT_MSGS = [
  "ზდაროვა, კაი მჭამელებს",
  "ბარო ბაროო",
  "ვაჟაზე 3 ლარად გამიყვან ძმა?",
  "ძევიანოსტო შეს-სემ გოდაა და...",
  "მოდი მოდი ჯიგარო",
  "კორკოტ გვიშველე",
  "კაააააააააააააა",
  "იყო არაბეთს როსტევან.."
];

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "BOT";
const PERSON_NAME = "Sajad";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  botResponse();
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse() {
  const r = random(0, BOT_MSGS.length - 1);
  const msgText = BOT_MSGS[r];
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}


AOS.init();
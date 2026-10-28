function currDate()
{
    const now = new Date();

    const items =
    {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    const liveDate = now.toLocaleDateString(undefined, items);

    const dateElement = document.getElementById('date');

    if (dateElement)
    {
        dateElement.textContent = liveDate;
    }
}

currDate();
let btn = document.getElementById("click");

const body = document.body;
const subheadings = document.querySelectorAll("h2");
const paragraphs = document.querySelectorAll("p");

let colors = ["white", "black", "#8B0000", "blue", "gray", "purple"];
let previousNum = -1;

function clickBtn()
{
    let num;

    do
    {
        num = Math.floor(Math.random() * colors.length);
    }
    while (num === previousNum);

    const selectedColor = colors[num];
    let textColor;

    switch(selectedColor)
        {
            case "white":
                textColor = "black";
                break;
            case "black":
                textColor = "white";
                break;
            case "#8B0000":
                textColor = "yellow";
                break;
            case "blue":
                textColor = "gold";
                break;
            case "gray":
                textColor = "white";
                break;
            case "purple":
                textColor = "#90EE90";
                break;
            default:
        }

    body.style.backgroundColor = colors[num];
    subheadings.forEach(function(subheading)
    {
        subheading.style.color = textColor;
    });
    paragraphs.forEach(function(paragraph){
        paragraph.style.color = textColor;
    });
    previousNum = num;

    console.log(colors[num]);
    console.log("Background: ", selectedColor);
    console.log("Text: ", textColor);
}
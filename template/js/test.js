document.write(1);
var cvs = document.getElementById('test');
var ctx = cvs.getContext("2d");



var bird = new Image();
var bg = new Image(); // Создание объекта
var fg = new Image(); // Создание объекта
var pipeUp = new Image(); // Создание объекта
var pipeBottom = new Image(); // Создание объекта
var gap = 90;
var score = 0;


//при нажатии на кнопку подъем птицы
document.addEventListener("keydown", moveUp);

//  позиция птички
var xPos = 10;
var yPos = 150;
var grav = 1.5;

// создание блоков
var pipe =[];
pipe[0] ={
    x: cvs.width,
    y: 0
}


function moveUp(){
    yPos -=25;
}

bird.src = "public/img/bird.png"; // Указание нужного изображения
bg.src = "public/img/bg.png"; // Аналогично
fg.src = "public/img/fg.png"; // Аналогично
pipeUp.src = "public/img/pipeUp.png"; // Аналогично
pipeBottom.src = "public/img/pipeBottom.png"; // Аналогично


function draw(){
    ctx.drawImage(bg, 0,0);

    //перебор массива объектов труб
    for (var i = 0; i < pipe.length; i++){
        ctx.drawImage(pipeUp, pipe[i].x,pipe[i].y);
        ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);
        pipe[i].x--;

        //добавление новых труб по прошествии расстояния 125
        if(pipe[i].x == 125){
            pipe.push({
                x: cvs.width,
                y: Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }

        //проверка столкновения птички с трубой
        if(xPos + bird.width >= pipe[i].x && xPos <= pipe[i].x + pipeUp.width
             && (yPos <= pipe[i].y + pipeUp.height || yPos + bird.height > pipe[i].y + pipeUp.height + gap )
            || yPos + bird.height >= cvs.height - fg.height
            || yPos < 0 ){
                location.reload();
            }

        if(pipe[i].x == 5){
            score++;
        }

    }



    ctx.drawImage(fg, 0, cvs.height - fg.height);
    ctx.drawImage(bird, xPos,yPos);

    yPos += grav;

    ctx.fillStyle = "#000";
    ctx.font = "24px Verdana";
    ctx.fillText("Счет " + score, 10, cvs.height - 20);

    requestAnimationFrame(draw);
}

bg.onload = draw();
document.write("end");

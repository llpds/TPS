
var stX = document.querySelector('.hidden').getAttribute('data-stx');
var stY = document.querySelector('.hidden').getAttribute('data-sty');
var enX = document.querySelector('.hidden').getAttribute('data-enx');
var enY = document.querySelector('.hidden').getAttribute('data-eny');

console.log(stX,stY,enX,enY);


function drawdoc(){
    var canvas = document.getElementById('tutorial');
    if (canvas.getContext){
      var ctx = canvas.getContext('2d');

      ctx.fillStyle = "rgb(200,0,0)";
      ctx.strokeRect (stX, stY, enX, enY);
/*
      ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
      ctx.fillRect (30, 30, 55, 50);
      
      ctx.fillStyle = "rgba(0, 255, 0)";
      ctx.strokeRect (40, 100, 55, 50);

      ctx.fillStyle = "rgba(0, 255, 0)";
      ctx.clearRect (45, 105, 55, 50);


        ctx.fillRect(25,25,100,100);
        ctx.clearRect(45,45,60,60);
        ctx.strokeRect(50,50,50,50);

        ctx.beginPath();
        ctx.moveTo(75,50);
        ctx.lineTo(100,75);
        ctx.lineTo(100,25);
        ctx.fill();


        ctx.beginPath();
        ctx.arc(75,75,50,0,Math.PI*2,true); // Внешняя окружность
        ctx.moveTo(110,75);
        ctx.arc(75,75,35,0,Math.PI,false);  // рот (по часовой стрелке)
        ctx.moveTo(65,65);
        ctx.arc(60,65,5,0,Math.PI*2,true);  // Левый глаз
        ctx.moveTo(95,65);
        ctx.arc(90,65,5,0,Math.PI*2,true);  // Правый глаз
        ctx.stroke();
*/


/*
        var raf;
        var running = false;

        var ball = {
        x: 100,
        y: 100,
        vx: 5,
        vy: 1,
        radius: 25,
        color: 'blue',
        draw: function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
            ctx.closePath();
            ctx.fillStyle = this.color;
            ctx.fill();
        }
        };

        function clear() {
        ctx.fillStyle = 'rgba(255, 255, 255, 0.3)';
        ctx.fillRect(0,0,canvas.width,canvas.height);
        }

        function draw() {
        clear();
        ball.draw();
        ball.x += ball.vx;
        ball.y += ball.vy;

        if (ball.y + ball.vy > canvas.height || ball.y + ball.vy < 0) {
            ball.vy = -ball.vy;
        }
        if (ball.x + ball.vx > canvas.width || ball.x + ball.vx < 0) {
            ball.vx = -ball.vx;
        }

        raf = window.requestAnimationFrame(draw);
        }

        canvas.addEventListener('mousemove', function(e) {
        if (!running) {
            clear();
            ball.x = e.clientX;
            ball.y = e.clientY;
            ball.draw();
        }
        });

        canvas.addEventListener('click', function(e) {
        if (!running) {
            raf = window.requestAnimationFrame(draw);
            running = true;
        }
        });

        canvas.addEventListener('mouseout', function(e) {
        window.cancelAnimationFrame(raf);
        running = false;
        });

        ball.draw();


*/
    }
}

<!DOCTYPE html>
<html>
<head>
    <title>Snake Game</title>

    <style>

        body{
            margin:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(to bottom, #0f172a, #020617);
            font-family:Arial, sans-serif;
            color:white;
        }

        .game-container{
            text-align:center;
            background:#111827;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,255,0,0.3);
        }

        h1{
            color:#22c55e;
            margin-bottom:5px;
        }

        h2{
            color:#94a3b8;
            margin-bottom:15px;
            font-size:18px;
        }

        #score{
            font-size:24px;
            font-weight:bold;
            color:#facc15;
            margin-bottom:15px;
        }

        button{
            padding:10px 20px;
            font-size:16px;
            background:#22c55e;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
            margin-bottom:15px;
        }

        button:hover{
            background:#16a34a;
        }

        canvas{
            background:black;
            border:3px solid #22c55e;
            border-radius:10px;
        }

    </style>
</head>
<body>

<div class="game-container">

    <h1>🐍 Snake Game</h1>
    <h2>Created by Shervin Marco</h2>

    <div id="score">Score: 0</div>

    <button id="startBtn">Start Game</button>

    <br>

    <canvas id="game" width="400" height="400"></canvas>

</div>

<script>

const canvas = document.getElementById("game");
const ctx = canvas.getContext("2d");
const startBtn = document.getElementById("startBtn");
const scoreDisplay = document.getElementById("score");

const box = 20;

let snake;
let direction;
let food;
let game;
let score = 0;

function initializeGame(){

    score = 0;
    scoreDisplay.innerHTML = "Score: 0";

    snake = [
        {x: 10 * box, y: 10 * box}
    ];

    direction = "RIGHT";

    food = {
        x: Math.floor(Math.random() * 20) * box,
        y: Math.floor(Math.random() * 20) * box
    };

    drawBoard();
}

function drawBoard(){

    ctx.fillStyle = "black";
    ctx.fillRect(0,0,400,400);

    ctx.fillStyle = "red";
    ctx.fillRect(food.x, food.y, box, box);

    snake.forEach(part => {
        ctx.fillStyle = "lime";
        ctx.fillRect(part.x, part.y, box, box);
    });
}

document.addEventListener("keydown", changeDirection);

function changeDirection(event){

    if(event.key === "ArrowLeft" && direction !== "RIGHT")
        direction = "LEFT";

    else if(event.key === "ArrowUp" && direction !== "DOWN")
        direction = "UP";

    else if(event.key === "ArrowRight" && direction !== "LEFT")
        direction = "RIGHT";

    else if(event.key === "ArrowDown" && direction !== "UP")
        direction = "DOWN";
}

function collision(head, array){

    for(let i = 0; i < array.length; i++){

        if(head.x === array[i].x &&
           head.y === array[i].y){

            return true;
        }
    }

    return false;
}

function draw(){

    ctx.fillStyle = "black";
    ctx.fillRect(0,0,400,400);

    for(let i = 0; i < snake.length; i++){

        ctx.fillStyle = i === 0 ? "#22c55e" : "lime";

        ctx.fillRect(
            snake[i].x,
            snake[i].y,
            box,
            box
        );
    }

    ctx.fillStyle = "red";
    ctx.fillRect(
        food.x,
        food.y,
        box,
        box
    );

    let snakeX = snake[0].x;
    let snakeY = snake[0].y;

    if(direction === "LEFT")
        snakeX -= box;

    if(direction === "RIGHT")
        snakeX += box;

    if(direction === "UP")
        snakeY -= box;

    if(direction === "DOWN")
        snakeY += box;

    if(snakeX === food.x &&
       snakeY === food.y){

        score++;

        scoreDisplay.innerHTML =
            "Score: " + score;

        food = {
            x: Math.floor(Math.random()*20)*box,
            y: Math.floor(Math.random()*20)*box
        };

    }else{
        snake.pop();
    }

    const newHead = {
        x: snakeX,
        y: snakeY
    };

    if(
        snakeX < 0 ||
        snakeY < 0 ||
        snakeX >= 400 ||
        snakeY >= 400 ||
        collision(newHead, snake)
    ){

        clearInterval(game);

        alert(
            "Game Over!\n\nFinal Score: " + score
        );

        startBtn.disabled = false;

        return;
    }

    snake.unshift(newHead);
}

startBtn.addEventListener("click", () => {

    initializeGame();

    clearInterval(game);

    game = setInterval(draw, 200);

    startBtn.disabled = true;
});

</script>

</body>
</html>
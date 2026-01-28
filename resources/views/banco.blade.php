<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn cờ vua</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #333;
        }
        .board {
            display: inline-block;
        }
        .row {
            display: flex;
        }
        .square {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>
    <div class="board">
        @for ($row = 0; $row < $n; $row++)
            <div class="row">
                @for ($col = 0; $col < $n; $col++)
                    @php
                        $isWhite = ($row + $col) % 2 == 0;
                        $squareClass = $isWhite ? 'white' : 'black';
                    @endphp
                    <div class="square {{ $squareClass }}"></div>
                @endfor
            </div>
        @endfor
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tax Office 3D</title>

    <!-- A-Frameのライブラリを読み込む -->
    <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/aframevr/aframe-extras@6.1.1/dist/aframe-extras.min.js"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .info {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="info">TaxBar®事務所見学</div>

    <a-scene shadow="type: pcfsoft">
        <!-- 🌟 環境光（全体の明るさを上げる） -->
        <a-light type="ambient" color="#EEE" intensity="0.6"></a-light>

        <!-- 🌟 ポイントライト（部屋の中央） -->
        <a-light type="point" position="0 3 -3" intensity="0.8" color="white" castShadow="true"></a-light>

        <!-- 🌟 スポットライト（デスクを照らす） -->
        <a-light type="spot" position="-1 3 -3.5" intensity="1.2" angle="45" penumbra="0.5"
            color="white"></a-light>

        <!-- 🎨 床（色を変えて境界を明確に） -->
        <a-plane position="0 0 0" rotation="-90 0 0" width="12" height="10" color="#D3D3D3"
            receiveShadow="true"></a-plane>

        <!-- 🏠 壁（少し色をつける） -->
        <a-box position="0 1.5 -5" width="10" height="3" depth="0.1" color="#FFDAB9"
            receiveShadow="true"></a-box>

        <!-- 🏷 TaxBar® のロゴ画像（テキストの下に配置） -->
        <a-image src="/images/logotoumei.png" position="-3.5 1.6 -4.9" width="3" height="3"></a-image>


        <!-- 📚 本棚 -->
        <a-box position="2 1.5 -4" width="1.5" height="2.5" depth="0.5" color="saddlebrown"
            receiveShadow="true"></a-box>

        <!-- 📕📗📘 本（前面に配置） -->
        <a-box position="1.6 2 -3.5" width="0.5" height="1.2" depth="0.2" color="blue"
            castShadow="true"></a-box>
        <a-box position="2 2 -3.5" width="0.5" height="1.2" depth="0.2" color="red"
            castShadow="true"></a-box>
        <a-box position="2.4 2 -3.5" width="0.5" height="1.2" depth="0.2" color="green"
            castShadow="true"></a-box>

        <!-- 🪑 応接ソファー -->
        <a-box position="-2.5 0.6 -1.5" width="2" height="1.2" depth="1" color="darkgray"
            castShadow="true"></a-box>
        <a-box position="2.5 0.6 -1.5" width="2" height="1.2" depth="1" color="darkgray"
            castShadow="true"></a-box>

        <!-- 🏢 応接テーブル -->
        <a-box position="0 0.4 -1.5" width="2" height="0.8" depth="1" color="brown"
            castShadow="true"></a-box>

        <!-- 🪑 待合スペース用の椅子 -->
        <a-box position="-3 0.6 0" width="1" height="1.2" depth="1" color="gray"
            castShadow="true"></a-box>
        <a-box position="3 0.6 0" width="1" height="1.2" depth="1" color="gray" castShadow="true"></a-box>

        <!-- 🖥 事務デスク -->
        <a-box position="-1 0.75 -3.5" width="2" height="0.1" depth="1" color="burlywood"
            castShadow="true"></a-box>

        <!-- 🚪 ドア -->
        <a-box position="0 1 -2.9" width="1" height="2" depth="0.1" color="brown"
            castShadow="true"></a-box>

        <!-- 🏺 鉢（観葉植物の根元） -->
        <a-cylinder position="0 0.3 0" radius="0.4" height="0.6" color="saddlebrown"
            castShadow="true"></a-cylinder>

        <!-- 💡 照明 -->
        <a-sphere position="0 2.8 -3.5" radius="0.2" color="yellow" castShadow="true"></a-sphere>

        <!-- 🏢 3Dテキスト（オフィスの看板） -->
        <a-text value="バーチャル税理士事務所" position="-1 2.5 -3" width="4" color="white"></a-text>

        <!-- 🚶‍♂️ プレイヤー（カメラ + 移動機能） -->
        <a-entity id="player" position="0 1.6 4" movement-controls="speed: 0.1">
            <a-camera>
                <a-cursor></a-cursor>
            </a-camera>
        </a-entity>
    </a-scene>

</body>

</html>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tax Office 3D</title>

    <!-- A-Frameライブラリ -->
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

    <div class="info">TaxBar® 事務所見学 - 豪華な観葉植物付き</div>

    <a-scene shadow="type: pcfsoft">
        <!-- 🌟 環境光（全体の明るさをUP） -->
        <a-light type="ambient" color="#EEE" intensity="0.8"></a-light>

        <!-- 💡 スポットライト（観葉植物を照らす） -->
        <a-light type="spot" position="0 3 2" intensity="1.5" angle="40" penumbra="0.5" color="white"></a-light>

        <!-- 🎨 床（豪華なカーペット追加） -->
        <a-plane position="0 0 0" rotation="-90 0 0" width="12" height="10" color="#D3D3D3"
            receiveShadow="true"></a-plane>
        <a-plane position="0 0.01 -2" rotation="-90 0 0" width="4" height="3" color="#B22222"></a-plane>

        <!-- 🏠 壁（少し色をつける） -->
        <a-box position="0 1.5 -5" width="10" height="3" depth="0.1" color="#FFDAB9"
            receiveShadow="true"></a-box>

        <!-- 🚪 ドア（中央に配置） -->
        <a-box position="0 1 -5" width="1" height="2" depth="0.1" color="brown" castShadow="true"></a-box>

        <!-- 🚪 ドアノブ（黒い球） -->
        <a-sphere position="0.4 1 -4.95" radius="0.05" color="black" castShadow="true"></a-sphere>

        <!-- 🏷 TaxBar® のロゴ画像 -->
        <a-image src="/images/logotoumei.png" position="-3.5 1.6 -4.9" width="3" height="3"></a-image>

        <!-- 📚 本棚 -->
        <a-box position="2 1.5 -4" width="1.5" height="2.5" depth="0.5" color="saddlebrown"
            receiveShadow="true"></a-box>

        <!-- 🪑 応接ソファー -->
        <a-box position="-2.5 0.6 -1.5" width="2" height="1.2" depth="1" color="darkgray"
            castShadow="true"></a-box>
        <a-box position="2.5 0.6 -1.5" width="2" height="1.2" depth="1" color="darkgray"
            castShadow="true"></a-box>

        <!-- 🏢 応接テーブル（待合エリアに追加） -->
        <a-box position="0 0.4 -1.5" width="2" height="0.8" depth="1" color="brown"
            castShadow="true"></a-box>

        <!-- ☕ コーヒーカップ（応接テーブル上） -->
        <a-cylinder position="0 0.9 -1.5" radius="0.2" height="0.3" color="white" castShadow="true"></a-cylinder>

        <!-- 🌿 豪華な観葉植物（GLBモデルを修正） -->
        <a-entity
            gltf-model="https://cdn.jsdelivr.net/gh/KhronosGroup/glTF-Sample-Models/2.0/SheenChair/glTF-Binary/SheenChair.glb"
            position="0 0 2" scale="1.5 1.5 1.5" rotation="0 180 0">
        </a-entity>

        <!-- 🌿 サブ観葉植物（左右にも配置） -->
        <a-entity
            gltf-model="https://cdn.jsdelivr.net/gh/KhronosGroup/glTF-Sample-Models/2.0/SheenChair/glTF-Binary/SheenChair.glb"
            position="-3 0 -2" scale="1.2 1.2 1.2" rotation="0 90 0">
        </a-entity>

        <a-entity
            gltf-model="https://cdn.jsdelivr.net/gh/KhronosGroup/glTF-Sample-Models/2.0/SheenChair/glTF-Binary/SheenChair.glb"
            position="3 0 -2" scale="1.2 1.2 1.2" rotation="0 -90 0">
        </a-entity>

        <!-- 🚶‍♂️ プレイヤー（カメラ + 固定視点 & マウス操作） -->
        <a-entity id="player" position="0 1 2">
            <a-camera fov="90" wasd-controls="enabled:false" look-controls>
                <a-cursor></a-cursor>
            </a-camera>
        </a-entity>


    </a-scene>

</body>

</html>

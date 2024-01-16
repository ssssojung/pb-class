<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>�پ��� �̹��� ��Ŀ ǥ���ϱ�</title>
    <style>
#mapwrap{position:relative;overflow:hidden;}
.category, .category *{margin:0;padding:0;color:#000;}   
.category {position:absolute;overflow:hidden;top:10px;left:10px;width:150px;height:50px;z-index:10;border:1px solid black;font-family:'Malgun Gothic','���� ���',sans-serif;font-size:12px;text-align:center;background-color:#fff;}
.category .menu_selected {background:#FF5F4A;color:#fff;border-left:1px solid #915B2F;border-right:1px solid #915B2F;margin:0 -1px;} 
.category li{list-style:none;float:left;width:50px;height:45px;padding-top:5px;cursor:pointer;} 
.category .ico_comm {display:block;margin:0 auto 2px;width:22px;height:26px;background:url('http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/category.png') no-repeat;} 
.category .ico_coffee {background-position:-10px 0;}  
.category .ico_store {background-position:-10px -36px;}   
.category .ico_carpark {background-position:-10px -72px;} 
</style>
</head>
<body>
<div id="mapwrap"> 
    <!-- ������ ǥ�õ� div -->
    <div id="map" style="width:100%;height:1080px;"></div>
    <!-- ���� ���� ǥ�õ� ��Ŀ ī�װ� -->
    <div class="category">
        <ul>
            <li id="coffeeMenu" onclick="changeMarker('coffee')">
                <span class="ico_comm ico_coffee"></span>
               Coffee
            </li>
            <li id="storeMenu" onclick="changeMarker('store')">
                <span class="ico_comm ico_store"></span>
                Market
            </li>
            <li id="carparkMenu" onclick="changeMarker('carpark')">
                <span class="ico_comm ico_carpark"></span>
                CarPark
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=3c28f2c25f877afad8c19e59f3a36636"></script>
<script>
var mapContainer = document.getElementById('map'), // ������ ǥ���� div  
    mapOption = { 
        center: new daum.maps.LatLng(37.498004414546934, 127.02770621963765), // ������ �߽���ǥ 
        level: 3 // ������ Ȯ�� ���� 
    }; 

var map = new daum.maps.Map(mapContainer, mapOption); // ������ �����մϴ�

// Ŀ�Ǽ� ��Ŀ�� ǥ�õ� ��ǥ �迭�Դϴ�
var coffeePositions = [ 
    new daum.maps.LatLng(37.499590490909185, 127.0263723554437),
    new daum.maps.LatLng(37.499427948430814, 127.02794423197847),
    new daum.maps.LatLng(37.498553760499505, 127.02882598822454),
    new daum.maps.LatLng(37.497625593121384, 127.02935713582038),
    new daum.maps.LatLng(37.49646391248451, 127.02675574250912),
    new daum.maps.LatLng(37.49629291770947, 127.02587362608637),
    new daum.maps.LatLng(37.49754540521486, 127.02546694890695)                
];

// ������ ��Ŀ�� ǥ�õ� ��ǥ �迭�Դϴ�
var storePositions = [
    new daum.maps.LatLng(37.497535461505684, 127.02948149502778),
    new daum.maps.LatLng(37.49671536281186, 127.03020491448352),
    new daum.maps.LatLng(37.496201943633714, 127.02959405469642),
    new daum.maps.LatLng(37.49640072567703, 127.02726459882308),
    new daum.maps.LatLng(37.49640098874988, 127.02609983175294),
    new daum.maps.LatLng(37.49932849491523, 127.02935780247945),
    new daum.maps.LatLng(37.49996818951873, 127.02943721562295)
];

// ������ ��Ŀ�� ǥ�õ� ��ǥ �迭�Դϴ�
var carparkPositions = [
    new daum.maps.LatLng(37.49966168796031, 127.03007039430118),
    new daum.maps.LatLng(37.499463762912974, 127.0288828824399),
    new daum.maps.LatLng(37.49896834100913, 127.02833986892401),
    new daum.maps.LatLng(37.49893267508434, 127.02673400572665),
    new daum.maps.LatLng(37.49872543597439, 127.02676785815386),
    new daum.maps.LatLng(37.49813096097184, 127.02591949495914),
    new daum.maps.LatLng(37.497680616783086, 127.02518427952202)                       
];    

var markerImageSrc = 'http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/category.png';  // ��Ŀ�̹����� �ּ��Դϴ�. ��������Ʈ �̹��� �Դϴ�
    coffeeMarkers = [], // Ŀ�Ǽ� ��Ŀ ��ü�� ������ ���� �迭�Դϴ�
    storeMarkers = [], // ������ ��Ŀ ��ü�� ������ ���� �迭�Դϴ�
    carparkMarkers = []; // ������ ��Ŀ ��ü�� ������ ���� �迭�Դϴ�

    
createCoffeeMarkers(); // Ŀ�Ǽ� ��Ŀ�� �����ϰ� Ŀ�Ǽ� ��Ŀ �迭�� �߰��մϴ�
createStoreMarkers(); // ������ ��Ŀ�� �����ϰ� ������ ��Ŀ �迭�� �߰��մϴ�
createCarparkMarkers(); // ������ ��Ŀ�� �����ϰ� ������ ��Ŀ �迭�� �߰��մϴ�

changeMarker('coffee'); // ������ Ŀ�Ǽ� ��Ŀ�� ���̵��� �����մϴ�    


// ��Ŀ�̹����� �ּҿ�, ũ��, �ɼ����� ��Ŀ �̹����� �����Ͽ� �����ϴ� �Լ��Դϴ�
function createMarkerImage(src, size, options) {
    var markerImage = new daum.maps.MarkerImage(src, size, options);
    return markerImage;            
}

// ��ǥ�� ��Ŀ�̹����� �޾� ��Ŀ�� �����Ͽ� �����ϴ� �Լ��Դϴ�
function createMarker(position, image) {
    var marker = new daum.maps.Marker({
        position: position,
        image: image
    });
    
    return marker;  
}   
   
// Ŀ�Ǽ� ��Ŀ�� �����ϰ� Ŀ�Ǽ� ��Ŀ �迭�� �߰��ϴ� �Լ��Դϴ�
function createCoffeeMarkers() {
    
    for (var i = 0; i < coffeePositions.length; i++) {  
        
        var imageSize = new daum.maps.Size(22, 26),
            imageOptions = {  
                spriteOrigin: new daum.maps.Point(10, 0),    
                spriteSize: new daum.maps.Size(36, 98)  
            };     
        
        // ��Ŀ�̹����� ��Ŀ�� �����մϴ�
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(coffeePositions[i], markerImage);  
        
        // ������ ��Ŀ�� Ŀ�Ǽ� ��Ŀ �迭�� �߰��մϴ�
        coffeeMarkers.push(marker);
    }     
}

// Ŀ�Ǽ� ��Ŀ���� ���� ǥ�� ���θ� �����ϴ� �Լ��Դϴ�
function setCoffeeMarkers(map) {        
    for (var i = 0; i < coffeeMarkers.length; i++) {  
        coffeeMarkers[i].setMap(map);
    }        
}

// ������ ��Ŀ�� �����ϰ� ������ ��Ŀ �迭�� �߰��ϴ� �Լ��Դϴ�
function createStoreMarkers() {
    for (var i = 0; i < storePositions.length; i++) {
        
        var imageSize = new daum.maps.Size(22, 26),
            imageOptions = {   
                spriteOrigin: new daum.maps.Point(10, 36),    
                spriteSize: new daum.maps.Size(100, 98)  
            };       
     
        // ��Ŀ�̹����� ��Ŀ�� �����մϴ�
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(storePositions[i], markerImage);  

        // ������ ��Ŀ�� ������ ��Ŀ �迭�� �߰��մϴ�
        storeMarkers.push(marker);    
    }        
}

// ������ ��Ŀ���� ���� ǥ�� ���θ� �����ϴ� �Լ��Դϴ�
function setStoreMarkers(map) {        
    for (var i = 0; i < storeMarkers.length; i++) {  
        storeMarkers[i].setMap(map);
    }        
}

// ������ ��Ŀ�� �����ϰ� ������ ��Ŀ �迭�� �߰��ϴ� �Լ��Դϴ�
function createCarparkMarkers() {
    for (var i = 0; i < carparkPositions.length; i++) {
        
        var imageSize = new daum.maps.Size(22, 26),
            imageOptions = {   
                spriteOrigin: new daum.maps.Point(10, 72),    
                spriteSize: new daum.maps.Size(36, 98)  
            };       
     
        // ��Ŀ�̹����� ��Ŀ�� �����մϴ�
        var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),    
            marker = createMarker(carparkPositions[i], markerImage);  

        // ������ ��Ŀ�� ������ ��Ŀ �迭�� �߰��մϴ�
        carparkMarkers.push(marker);        
    }                
}

// ������ ��Ŀ���� ���� ǥ�� ���θ� �����ϴ� �Լ��Դϴ�
function setCarparkMarkers(map) {        
    for (var i = 0; i < carparkMarkers.length; i++) {  
        carparkMarkers[i].setMap(map);
    }        
}

// ī�װ��� Ŭ������ �� type�� ���� ī�װ��� ��Ÿ�ϰ� ������ ǥ�õǴ� ��Ŀ�� �����մϴ�
function changeMarker(type){
    
    var coffeeMenu = document.getElementById('coffeeMenu');
    var storeMenu = document.getElementById('storeMenu');
    var carparkMenu = document.getElementById('carparkMenu');
    
    // Ŀ�Ǽ� ī�װ��� Ŭ������ ��
    if (type === 'coffee') {
    
        // Ŀ�Ǽ� ī�װ��� ���õ� ��Ÿ�Ϸ� �����ϰ�
        coffeeMenu.className = 'menu_selected';
        
        // �������� ������ ī�װ��� ���õ��� ���� ��Ÿ�Ϸ� �ٲߴϴ�
        storeMenu.className = '';
        carparkMenu.className = '';
        
        // Ŀ�Ǽ� ��Ŀ�鸸 ������ ǥ���ϵ��� �����մϴ�
        setCoffeeMarkers(map);
        setStoreMarkers(null);
        setCarparkMarkers(null);
        
    } else if (type === 'store') { // ������ ī�װ��� Ŭ������ ��
    
        // ������ ī�װ��� ���õ� ��Ÿ�Ϸ� �����ϰ�
        coffeeMenu.className = '';
        storeMenu.className = 'menu_selected';
        carparkMenu.className = '';
        
        // ������ ��Ŀ�鸸 ������ ǥ���ϵ��� �����մϴ�
        setCoffeeMarkers(null);
        setStoreMarkers(map);
        setCarparkMarkers(null);
        
    } else if (type === 'carpark') { // ������ ī�װ��� Ŭ������ ��
     
        // ������ ī�װ��� ���õ� ��Ÿ�Ϸ� �����ϰ�
        coffeeMenu.className = '';
        storeMenu.className = '';
        carparkMenu.className = 'menu_selected';
        
        // ������ ��Ŀ�鸸 ������ ǥ���ϵ��� �����մϴ�
        setCoffeeMarkers(null);
        setStoreMarkers(null);
        setCarparkMarkers(map);  
    }    
} 
</script>
</body>
</html>

    import * as THREE from './three/three.module.js';

    import { OBJLoader } from './three/OBJLoader.js';
    
    import { DeviceOrientationControls } from './three/DeviceOrientationControls.js';

    // import { OrbitControls } from './OrbitControls.js';

    var container;

    var camera, scene, renderer;

    var mouseX = 0, mouseY = 0;

    var windowHalfX = window.innerWidth / 2;
    var windowHalfY = window.innerHeight / 2;

    var object;

    init();
    animate();


    function init() {
		
		var element = document.getElementById("new");
        container = document.createElement( 'div' );
        container.setAttribute("class", "canvas");
        container.style.cssText = 'position: fixed; top: 0px; bottom:-10px; z-index: 20; pointer-events:none;margin-left: auto; margin-right: auto;';
//        document.body.appendChild( container );
		element.appendChild(container);

        camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 2000 );
        camera.position.z = 250;

        // scene

        scene = new THREE.Scene();

        var ambientLight = new THREE.AmbientLight( 0xcccccc, 0.4 );
        scene.add( ambientLight );

        var pointLight = new THREE.PointLight( 0xffffff, 0.8 );
        camera.add( pointLight );
        scene.add( camera );


        // manager

        function loadModel() {

            object.traverse( function ( child ) {

                if ( child.isMesh ){
                    // child.geometry.computeVertexNormals();
                    child.material = material;
                    // child.material.map = texture;
                    // child.material.color.setHex( 0x2BC0BE );
                    // child.material.depthWrite = false;
//                     child.material.envMap=envmap;
                } 

            } );

            object.position.y = - 9;
            scene.add( object );

        }

        var manager = new THREE.LoadingManager( loadModel );

        manager.onProgress = function ( item, loaded, total ) {

            console.log( item, loaded, total );

        };
		
		// device orientation
		if (window.DeviceOrientationEvent) {
		    window.addEventListener('deviceorientation', function (eventData) {
		
		
		        var tiltX = Math.round(eventData.gamma * 2 );
		
		
		        var tiltY =  Math.round(eventData.beta * 2);
		
		        deviceOrientationHandler(tiltX,tiltY);
		
		    }, false);
		}
		
		function deviceOrientationHandler(tiltX, tiltY){
		
		      mouseX = tiltX;
		      mouseY = tiltY;
		}

        // texture

        var textureLoader = new THREE.TextureLoader( manager );

        var texture = textureLoader.load( 'assets/img/color.jpg' );

        var envmap = textureLoader.load( 'img/container.jpg' );

        
        var material = new THREE.MeshStandardMaterial( {
            metalness: 0.8,   // between 0 and 1
            roughness: 0.7, // between 0 and 1
            opacity: 0.8,
            transparent:true,
//			shininess: 100,
            envMap: envmap,
		    color: 0xffffff,
		    specular: 0xffffff,
//			transparent: true,
		    side: THREE.BackSide,
		    blending: THREE.NormalBlending,
		    depthWrite: true,
        } );

        const texture2 = textureLoader.load(
        './img/CleanRoom10.jpg',
        () => {
        const rt = new THREE.WebGLCubeRenderTarget(texture2.image.height);
        rt.fromEquirectangularTexture(renderer, texture2);
        // scene.background = rt;
        material.envMap=rt;
        });

        // model

        function onProgress( xhr ) {

            if ( xhr.lengthComputable ) {

                var percentComplete = xhr.loaded / xhr.total * 100;
                console.log( 'model ' + Math.round( percentComplete, 2 ) + '% downloaded' );

            }

        }

        function onError() {}

        var loader = new OBJLoader( manager );

        loader.load( './erlenmeyer.obj', function ( obj ) {
            obj.scale.set( 12, 12, 12 );
            object = obj;
            

        }, onProgress, onError );

        //

        renderer = new THREE.WebGLRenderer({alpha:true});
        renderer.setClearColor(0xffffff, 0);
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth, window.innerHeight);
        container.appendChild( renderer.domElement );

        document.addEventListener( 'mousemove', onDocumentMouseMove, false );

        //

        window.addEventListener( 'resize', onWindowResize, false );

    }

    function onWindowResize() {

        windowHalfX = window.innerWidth / 2;
        windowHalfY = window.innerHeight / 2;

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize( window.innerWidth, window.innerHeight);

    }

    function onDocumentMouseMove( event ) {

        mouseX = ( event.clientX - windowHalfX ) / 2;
        mouseY = ( event.clientY - windowHalfY ) / 2;

    }

    //

    function animate() {

        requestAnimationFrame( animate );
        render();

    }

    function render() {

        camera.position.x += ( mouseX - camera.position.x ) * .05;
        camera.position.y += ( - mouseY - camera.position.y ) * .05;
		
//		object.rotation.x += 0.01;
		object.rotation.x = ( mouseX - object.rotation.x ) * 0.0005;

        camera.lookAt( object.position );
	

        renderer.render( scene, camera );

    }


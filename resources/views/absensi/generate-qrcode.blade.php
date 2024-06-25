<skrip  src = "webcam.js" > </skrip >
    <div  id = "kamera_saya"  style = "lebar:320px; tinggi:240px;" > </div >
    <div  id = "hasil_saya" > </div > <
    bahasa skrip  = "JavaScript" > Kamera web . lampirkan ( '#kamera_saya' ) ; fungsi take_snapshot ( ) { Kamera web . snap ( function ( data_uri ) { document .getElementById ( ' my_result ' ) . innerHTML = '<img src="' + data_uri + '"/>' ; } ) ; } </script > <a href = "javascript:void(take_snapshot())" > Ambil Cuplikan </a >

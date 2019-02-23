<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Day Lite Edition</title>
    <!-- Cargando TensorFlow.js -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.13.0"> </script>
</head>
<body>
<script>
    // Primero definimos el modelo para regresión lineal

    console.log('Iniciando TF.JS ...');

    const model = tf.sequential();

    model.load('https://francis-gonzales.info/tensorflowjs/lineal/model.json');
    console.log('Haciendo la prediccion de un x de 10 ...');
    model.predict(tf.tensor2d([10], [1, 1])).print();
    console.log('Haciendo la prediccion de un x de 12 ...');
    model.predict(tf.tensor2d([12], [1, 1])).print();
// model.weights.bin

    const saveResult = model.save('https://francis-gonzales.info/tensorflowjs/lineal/model.php');
    console.log(saveResult);
</script>
</body>
</html>
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

    console.log('Generando las capas necesarias...');
    model.add(tf.layers.dense({units: 1, inputShape: [1]}));

    // Preparamos el modelo para el entrenamiento
    console.log('Preparando el modelo para en entrenamiento...');
    model.compile({
        loss: 'meanSquaredError',  // Error Cuadratico Medio
        optimizer: 'sgd' // Optimizador de Descende Gradiente
    });

    // Generamos algunos datos para el entrenamiento
    const xs = tf.tensor2d([-2, -1, 0, 1, 2], [5, 1]);
    const ys = tf.tensor2d([0, 1, 2, 3, 4], [5, 1]);

    // Generamos la predicción con datos nuevos una vez el modelo esté entrenado
    console.log('Entrenando el modelo...');
    model.fit(xs, ys, {epochs: 250}).then(() => {
        console.log('Haciendo la prediccion de un x de 10 ...');
        model.predict(tf.tensor2d([10], [1, 1])).print();
        console.log('Haciendo la prediccion de un x de 12 ...');
        model.predict(tf.tensor2d([12], [1, 1])).print();
    });

    const saveResult = model.save('https://francis-gonzales.info/tensorflowjs/model.php');
    console.log(saveResult);
</script>
</body>
</html>
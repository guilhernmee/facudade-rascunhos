<html>
    <body>
        <h1> Exemplo de PhP no HTML </h1>
        <?php
        date_default_timezone_set("Asia/Bangkok");
        $data_hoje = date ("d/m/y h:i:s", time());
        ?>
        <p aling="center"> Agora em Bangkok é: <?php echo $data_hoje ; ?> </p>
    </body>
</html>
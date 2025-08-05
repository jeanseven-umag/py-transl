
<?php
    $json = '{
        "leads": {
            "status": [
                {
                    "id": "33278165",
                    "name": "Заявка на демо-доступ",
                    "status_id": "16198420",
                    "old_status_id": "14317123",
                    "price": "1",
                    "responsible_user_id": "1242249",
                    "last_modified": "1581078901",
                    "modified_user_id": "1242249",
                    "created_user_id": "1242249",
                    "date_create": "1581073251",
                    "pipeline_id": "422964",
                    "account_id": "13403238",
                    "custom_fields": [
                        {
                            "id": "1961557",
                            "name": "Источник",
                            "values": [
                                {
                                    "value": "Заявка с сайта",
                                    "enum": "4693273"
                                }
                            ]
                        },
                        {
                            "id": "2002717",
                            "name": "Откуда пришла заявка",
                            "values": [
                                {
                                    "value": "Прямой визит",
                                    "enum": "4750877"
                                }
                            ]
                        },
                        {
                            "id": "2002719",
                            "name": "roistat",
                            "values": [
                                {
                                    "value": "252818"
                                }
                            ]
                        },
                        {
                            "id": "1975159",
                            "name": "Стоимость ПО",
                            "values": [
                                {
                                    "value": "1"
                                }
                            ]
                        }
                    ],
                    "created_at": "1581073251",
                    "updated_at": "1581078901"
                }
            ]
        },
        "account": {
            "subdomain": "umag",
            "id": "13403238",
            "_links": {
                "self": "https://umag.amocrm.ru"
            }
        }
    }';
    $lol = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>

    <?php echo gettype($lol["leads"]["status"][0]["status_id"]);?>
   <script>
    $(document).ready(function(){
        $('#snd').click(()=>{
            $.ajax({
                method: "POST",
                url: "https://umag.kz/amoclient/salelead/p/1mRvccyvDqmToZzkoJK8",
                data: { 
                    text: $('#text').val(),
                    text2: $('#tex2').val(),
                    text3: $('#tex3').val()
                }
            }).done(function( msg ) {
                console.log(msg)
            });
        });
    });
   </script>
</body>
</html>


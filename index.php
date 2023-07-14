<!DOCTYPE html>
<html>

<head>
    <title>seewo1 - Test Page</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/style-text.css" rel="stylesheet" type="text/css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <script src="/libs/jquery-3.7.0.min.js"></script>
    <script src="/js/main.js"></script>
    <script type="text/javascript">
        function zero_first_format(value)
        {
            if (value < 10)
            {
                value='0'+value;
            }
            return value;
        }
        function date_time()
        {
            var current_datetime = new Date();
            var day = zero_first_format(current_datetime.getDate());
            var month = zero_first_format(current_datetime.getMonth()+1);
            var year = current_datetime.getFullYear();
            var hours = zero_first_format(current_datetime.getHours());
            var minutes = zero_first_format(current_datetime.getMinutes());
            return day+"."+month+"."+year+" "+hours+":"+minutes;
        }
        setInterval(function () {
            document.getElementById('current_date').innerHTML = date_time();
        }, 1000);
    </script>
</head>
	
<body>
    

    <main class="main">
        <h2>Проекты</h2>
        <div class="content">   
            
            <div class="left-content">
                <h1>Сайт Energo Minor</h1>
                <ul class="list">
                    <li><a href="#block_idea">Описание идеи и основных функций для разработки</a></li>
                    <li><a href="">Создание функциональной части</a></li>
                    <li><a href="https://www.figma.com/proto/j2wr0QN9CWxCgghD9hIF2U/MinorEnergo?type=design&node-id=2-2&t=y7cv6WPxwlxwoNVs-6&starting-point-node-id=2%3A2&hide-ui=1" target="_blank">Разработка дизайн-макета</a></li>
                    <li>Загрузка на хостинг</li>
                    <li>Тестирование</li>
                    <li>Реализация идеи</li>
                </ul>
            </div>
            <div class="right-content">
                <h1>Тестовый вариант</h1>
                <p1>Возьму пониже</p1>
            </div>
            
        </div>

        <div class="idea" id="block_idea">
            <h1>Идея</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perferendis dolores, quas eaque dicta ipsum odio dolor perspiciatis sunt tenetur esse odit suscipit iure illum ipsam hic nesciunt, quo quisquam.
            Similique nam praesentium sunt, dolore magni, aut porro explicabo earum dolorem tempore ab ut nesciunt id eaque eius! Odio optio excepturi, dolores quae sapiente ipsam nostrum ea eaque mollitia placeat.
            Ut, sed quam, ex iure commodi pariatur reiciendis dolorem suscipit rerum exercitationem officiis necessitatibus ipsa earum qui aliquid! Aliquam nam nesciunt quam omnis autem fuga recusandae corrupti nemo sapiente quae!
            Pariatur laborum doloremque harum delectus nulla ab tenetur, id corporis impedit quidem quas praesentium non incidunt nobis aliquam voluptate dolores veniam doloribus tempore. In, expedita odit. Dignissimos dolore qui aut.
            Nihil vitae laboriosam mollitia porro cumque accusantium exercitationem delectus illo earum libero, ad nam inventore molestiae aliquid dolorem culpa illum officiis totam. Vero velit voluptatem praesentium aliquid atque exercitationem quam.
            Suscipit architecto debitis provident quia odio sint quaerat. Nesciunt error eius esse eos odit assumenda saepe et. Minima nam quas ipsa incidunt perspiciatis fuga, enim ut obcaecati. Ex, animi blanditiis!
            Autem illum similique alias, voluptate voluptatibus quos inventore consequatur facilis laborum sed enim maiores repellat amet rerum quisquam tenetur quas obcaecati assumenda eos nisi, repudiandae adipisci velit iusto quo? Velit.
            Eius cum esse a quas laudantium enim, nobis reiciendis itaque. Ab, error quam. Soluta maxime quam atque facilis excepturi aspernatur tenetur, nam voluptate aliquid ut nostrum eos expedita, cupiditate inventore.
            Quaerat delectus, impedit, vero consequuntur soluta harum ipsum consectetur et, eos distinctio quae. Quaerat quod eum facere illo dicta magnam alias nostrum ratione magni. Ullam incidunt repellendus voluptate necessitatibus minima!
            Hic, aliquid nam ipsum iure a at nobis architecto quod sint pariatur commodi cupiditate. Eum voluptas quae odio obcaecati consequatur provident laborum, ex nostrum, officia dolore eligendi doloremque molestiae architecto?
            Illum, necessitatibus officiis quod minima error facere neque adipisci alias corporis eius. Quisquam necessitatibus illo temporibus cupiditate veritatis sed nihil, dolor atque iure nisi dolorem voluptatem asperiores quod beatae vel!
            Nam voluptatum aperiam molestiae dolore minus dolor sapiente porro voluptas tenetur, reiciendis atque aut tempora dolores. Nihil repellat qui excepturi vel alias, tempore beatae quasi fugit autem, impedit, blanditiis consectetur.
            Quia eaque fuga odit a impedit culpa ipsam obcaecati praesentium assumenda natus fugit quis repellat accusantium, accusamus fugiat deleniti ipsum suscipit, aliquam illum laudantium. Enim quibusdam pariatur minima inventore libero?
            Dolorum, illum consectetur architecto delectus non doloremque molestiae deserunt odit, vel, ex blanditiis quibusdam sint dolore illo quisquam corrupti quo porro aliquid laborum sit dolores repudiandae modi cupiditate veritatis? Atque!
            Distinctio ut sunt, laboriosam deserunt iste quod illo harum praesentium ducimus possimus suscipit necessitatibus, expedita odit sint provident non ratione fugit sit iure debitis? Architecto minima eius quos iure sint.
            Molestiae exercitationem, tenetur ipsum error repellat a, quia, odit autem amet quo mollitia. Necessitatibus, voluptatem praesentium asperiores ipsa, perspiciatis, nobis culpa vero quisquam deleniti aperiam earum reprehenderit. Reiciendis, modi nulla.
            Ipsum similique molestiae fuga quas et blanditiis laborum nihil ea facere iusto neque reprehenderit sed, temporibus excepturi placeat corrupti explicabo a non nobis provident pariatur! Fugiat voluptas odit alias sint?
            Ab maxime temporibus ipsam veniam hic deserunt consequatur porro cupiditate nulla? Sint, molestias harum, architecto mollitia nam minima voluptatem quidem enim dolorem neque, vitae aliquid sequi rerum dignissimos ex veniam!
            Sapiente temporibus sed tempore corporis quas velit labore distinctio doloremque dolor, voluptatum, reiciendis ad. Ullam cumque dolor ipsa fuga porro, quam ex deleniti, nemo distinctio sapiente id illo, consectetur minima!
            Eligendi, commodi. Nostrum repellat, delectus molestiae voluptates quis architecto possimus libero illo ex quod iusto rem? Suscipit placeat omnis, nihil obcaecati facere vitae tempora ipsum, quod explicabo quis doloremque voluptatibus?
            Odit et veniam, consequuntur facilis eum nihil in illo hic iusto. Vel, velit? Impedit quaerat ab soluta exercitationem cumque aut maiores dicta perferendis, eligendi harum dolorum consectetur saepe asperiores odit?
            Laborum eos natus ab cupiditate facere, aliquid in eveniet iure voluptate quis eius voluptas totam deleniti ea saepe est impedit maiores, deserunt aspernatur voluptatibus laudantium explicabo sequi exercitationem beatae. Consectetur?
            Omnis eum minima adipisci excepturi facilis, dolorem quis? Sunt distinctio recusandae temporibus ex, nihil ratione neque! Dolorum nemo praesentium quaerat commodi qui ea, quam possimus repudiandae? Excepturi voluptatibus repellendus aperiam.
            Cum eligendi beatae quos modi accusamus et laudantium maxime sint dolores itaque deleniti suscipit voluptas impedit neque quod autem voluptatibus distinctio, eveniet animi, amet ipsum. Dignissimos ex suscipit atque expedita!
            Perferendis voluptate ab dignissimos, rerum saepe, quisquam quibusdam ea quidem, pariatur exercitationem repellendus maiores itaque porro! Beatae in consequuntur veniam ipsam ut obcaecati dolorem, asperiores nostrum itaque deserunt. Esse, dolores?
             minima similique accusamus beatae quasi voluptatem dolore aut ab dolorem dolorum. Ab repudiandae atque enim nisi sequi iure, quisquam ut ea vel sunt fuga saepe modi dicta exercitationem dolore?</p>
        </div>
    </main>

    <footer class="footer">
        
        <div class="main-footer">
            <div class="date" id="current_date"></div>
            <div class="text-footer">
                (c) Алексей "seewo1" Кожемякин
            </div>
            <img src="img/Saveboy.png" width="100" height="100" alt="Saveboy" class="my-logo">
        </div>
        
    </footer>
    
</body>
</html>

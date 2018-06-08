(function() {

    $(document).ready(function() {
        
            //Общие данные 
            var totalConstructionMain = 90.76; //Загально будівельні
            var facadeMain = 41.08; // Фасад
            var networksMain = 44.02; // Мережі
            var beautificationMain = 25; //Благоустройство
        
            //Уточненные данные
            //Строительство
            var constructionTillPoint = 100; //Работы до отм.
            var carcassConstrution = 100; //Каркас
            var brickworkConstrution = 78.23; //Кирпичня кладка
            var interiorFinshConstrution = 17.50; //Внутренняя отделка
            //Фасад
            var facadeFacade = 45.45; //Фасад
            var windowsFacade = 87.68; //Окна
            //Инженерия
            var inernalEngineering = 68.95; //Внутренние
            var externalEngineering = 74; //Внешние
        
        
        
            var location = window.location.href.split('/');
            var constructionText, facadeText, engineeringText;
        
            if(location[3] == 'ru') {
                constructionText = 'Работы до отм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Кирпичная кладка - ' + brickworkConstrution + '%&#013;</br>Внутренняя отделка - ' + interiorFinshConstrution + '%&#013;';
                facadeText = 'Окна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
                engineeringText = 'Внутренние - ' + inernalEngineering + '%&#013; <br>Внешние - ' + externalEngineering + '%&#013;';
            } else if(location[3] == 'en'){
                constructionText = 'Роботи до відм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Цегляна кладка - ' + brickworkConstrution + '%&#013;</br>Внутрішнє опорядження - ' + interiorFinshConstrution + '%&#013;';
                facadeText = 'Вікна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
                engineeringText = 'Внутрішні - ' + inernalEngineering + '%&#013; <br>Зовнішні - ' + externalEngineering + '%&#013;';
            } else {
                constructionText = 'Роботи до відм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Цегляна кладка - ' + brickworkConstrution + '%&#013;</br>Внутрішнє опорядження - ' + interiorFinshConstrution + '%&#013;';
                facadeText = 'Вікна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
                engineeringText = 'Внутрішні - ' + inernalEngineering + '%&#013; <br>Зовнішні - ' + externalEngineering + '%&#013;';
            }
        
            $("#container1_0").attr("data-tooltip", constructionText);
            $("#container1_2").attr("data-tooltip", facadeText);
            $("#container1_3").attr("data-tooltip", engineeringText);
            
            $("#container1_0").Progress({
                percent: totalConstructionMain, 
                width: 220,
                height: 30,
                backgroundColor: 'transparent',
                barColor: '#4c4c4c',
                fontColor: '#fff',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });
          
            $("#container1_1").Progress({
                percent: beautificationMain, 
                width: 220,
                height: 30,
                backgroundColor: 'transparent',
                barColor: '#4c4c4c',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });
          
            $("#container1_2").Progress({
                percent: facadeMain,
                width: 220,
                height: 30,
                backgroundColor: 'transparent',
                barColor: '#4c4c4c',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });
          
            $("#container1_3").Progress({
                percent: networksMain, 
                width: 220,
                height: 30,
                backgroundColor: 'transparent',
                barColor: '#4c4c4c',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });
        
        });

})();
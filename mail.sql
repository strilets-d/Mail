-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 22 2019 г., 14:12
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mail`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) NOT NULL,
  `name_city` varchar(255) NOT NULL,
  `lat` varchar(25) NOT NULL,
  `lng` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id_city`, `name_city`, `lat`, `lng`) VALUES
(1, 'Хмельницький', '49.422', '26.997'),
(2, 'Вінниця', '49.233083', '28.468217'),
(3, 'Київ', '50.45466', '30.5238'),
(4, 'Трускавець', '49.266772', '23.559035'),
(5, 'Нікольське', '47.198150', '37.322030');

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id_department` int(10) NOT NULL,
  `num_department` int(10) NOT NULL,
  `address_department` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id_department`, `num_department`, `address_department`, `lat`, `lng`) VALUES
(1, 1, 'Хмельницкий, вул. Зарічанська 10', '49.433222992362595', '27.00460722104606'),
(2, 2, 'Хмельницький, вул. Проскурівського Підпілля 28', '49.42716978929409', '26.983879058253546'),
(3, 3, 'Хмельницький, вул. Грушевьского 64', '49.42366661475646', '26.98441005947042'),
(4, 4, 'Вінниця, вул. Короленка 5', '49.237787421658595', '28.506590661049373'),
(5, 5, 'Вінниця, вул. Володимира Винниченка 21', '49.24224245455533', '28.49086745771414'),
(6, 6, 'Київ, вул. Ірининська 4', '50.450967777747955', '30.516380634987648'),
(7, 7, 'Київ, вул. Січових Стрільців 26а', '50.45652484496024', '30.498409734897333');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) NOT NULL,
  `num_premise` int(8) NOT NULL,
  `id_department` int(10) NOT NULL,
  `phone_user` varchar(255) NOT NULL,
  `pib_sender` varchar(255) NOT NULL,
  `pib_recipient` varchar(255) NOT NULL,
  `weight_premise` int(10) NOT NULL,
  `length_premise` int(10) NOT NULL,
  `width_premise` int(10) NOT NULL,
  `height_premise` int(10) NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_dep_rec` int(10) DEFAULT NULL,
  `price_premise` int(10) NOT NULL,
  `price_delivery` int(10) DEFAULT NULL,
  `type_payer` int(10) NOT NULL,
  `reverse_delivery` int(10) DEFAULT NULL,
  `packaging` int(10) DEFAULT NULL,
  `courier` tinyint(1) NOT NULL,
  `address_delivery` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_order` varchar(255) DEFAULT NULL,
  `id_moder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `num_premise`, `id_department`, `phone_user`, `pib_sender`, `pib_recipient`, `weight_premise`, `length_premise`, `width_premise`, `height_premise`, `id_type`, `id_dep_rec`, `price_premise`, `price_delivery`, `type_payer`, `reverse_delivery`, `packaging`, `courier`, `address_delivery`, `status`, `id_user`, `date_order`, `id_moder`) VALUES
(1, 12345678, 1, '380987002881', 'Стрілець Дмитро Анатолійович', 'Нетреба Ігорь Вікторович', 10, 10, 10, 10, 1, 2, 1000, 250, 1, 2, 1, 1, 'Хмельницький,С. Мар\'янівка, вул. Паризької Комуни, буд. 40', 3, 1, '2019-03-20', 2),
(2, 87654321, 2, '380962135546', 'Стрілець Дмитро Анатолійович', 'Вовкович Дмитро Валерійович', 25, 100, 50, 50, 1, 1, 5000, 350, 1, NULL, 1, 0, 'Хмельницький, вул. Зарічанська, буд. 10', 1, 1, '2019-03-20', 2),
(23, 21543724, 1, '380987002881', 'Стрілець Дмитро Анатолійович', 'Нетреба Ігорь Вікторович', 1, 10, 10, 10, 1, 5, 5000, 346, 1, NULL, NULL, 0, '', 1, NULL, '2019-03-18 17:13:56', 2),
(24, 27593972, 1, '380987002881', 'Стрілець Дмитро Анатолійович', 'Савіцький Владислав Русланович', 10, 10, 10, 10, 1, 7, 5000, 341, 1, 2, NULL, 0, '', 1, NULL, '2019-03-20', 2),
(25, 83475837, 1, '0987002881', 'Прус Богдан Батькович', 'Козубай Марина Батьківна', 10, 10, 10, 10, 1, 6, 50000, 566, 1, NULL, NULL, 0, '', 1, NULL, '2019-03-21', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `packaging`
--

CREATE TABLE `packaging` (
  `id_packaging` int(11) NOT NULL,
  `type_packaging` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `packaging`
--

INSERT INTO `packaging` (`id_packaging`, `type_packaging`) VALUES
(1, 'Коробка'),
(2, 'Тубус'),
(3, 'Пузирчаста плівка'),
(4, 'Скотч'),
(5, 'Гафрокартон'),
(6, 'Пінопласт');

-- --------------------------------------------------------

--
-- Структура таблицы `reverse_delivery`
--

CREATE TABLE `reverse_delivery` (
  `id_reverse_del` int(10) NOT NULL,
  `type_reverse_del` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reverse_delivery`
--

INSERT INTO `reverse_delivery` (`id_reverse_del`, `type_reverse_del`) VALUES
(1, 'Гроші'),
(2, 'Документи');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id_review` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `text_review` varchar(255) NOT NULL,
  `date_review` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `text_review`, `date_review`) VALUES
(1, 1, 'Найкращий сервіс, рекомендую.', '2019-02-12 17:22:33'),
(2, 1, 'Швидке обслуговування, усе доїхало цілим, рекомендую.', '2019-02-12 18:10:11'),
(3, 1, 'Неперевершений сервіс', '2019-02-12 18:46:35'),
(4, 1, 'Посилка йшла довше обіцяного 1 дня, решта усе в порядку.', '2019-02-12 18:47:23'),
(5, 1, 'Працівник нахамив при оформленні замовлення, не рекомендую даний сервіс.', '2019-02-12 18:47:58'),
(8, 1, 'Посилка дойшла швидко та цілою, усе в порядку.', '2019-02-13 09:42:33'),
(9, 1, 'Топ сервіс.', '2019-02-13 09:51:16'),
(10, 2, 'Кращого обслуговування ще не бачив!', '2019-02-20 09:10:50'),
(11, 2, 'Ну такоє', '2019-03-14 09:11:09'),
(12, 2, 'Так себе', '2019-03-14 09:13:17'),
(13, 2, 'Класна доставка', '2019-03-14 09:17:09'),
(14, 2, 'Усе доїхало цілим', '2019-03-14 09:38:13'),
(21, 1, 'Дуже крутий сервіс, рекомендую!!!', '2019-03-14 17:28:27');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `name_status` varchar(255) NOT NULL,
  `image_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name_status`, `image_status`) VALUES
(1, 'Готується до відправлення', 'Time-Sandglass-icon.png'),
(2, 'Відправлено', 'Food-Delivery-Food-icon.png'),
(3, 'Доставлено, очікує отримувача', 'Time-And-Date-Alarm-Clock-icon.png');

-- --------------------------------------------------------

--
-- Структура таблицы `type_payer`
--

CREATE TABLE `type_payer` (
  `id_payer` int(10) NOT NULL,
  `name_payer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_payer`
--

INSERT INTO `type_payer` (`id_payer`, `name_payer`) VALUES
(1, 'Відправник'),
(2, 'Отримувач');

-- --------------------------------------------------------

--
-- Структура таблицы `type_premise`
--

CREATE TABLE `type_premise` (
  `id_type` int(10) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_premise`
--

INSERT INTO `type_premise` (`id_type`, `name_type`) VALUES
(1, 'Вантажі і посилки'),
(2, 'Документи'),
(3, 'Шини і диски'),
(4, 'Піддони');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `pib` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'none.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `pib`, `image`) VALUES
(1, 'strilets.d', '3d368c7ad7726a1d30602003f8e0a14d01a8ca12', 'user', 'Стрілець Дмитро Анатолійович', 'index5c8f53ce1b32d.jpg'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', 'none.png'),
(3, 'vovkovych', 'ac88cb87c4aced0a8f57f395e6563084d8fbd0ae', 'admin', 'Вовкович Дмитро Валерійович', 'none.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id_department`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `type_payer` (`type_payer`),
  ADD KEY `id_dep_rec` (`id_dep_rec`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `reverse_delivery` (`reverse_delivery`),
  ADD KEY `status` (`status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `packaging` (`packaging`);

--
-- Индексы таблицы `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`id_packaging`);

--
-- Индексы таблицы `reverse_delivery`
--
ALTER TABLE `reverse_delivery`
  ADD PRIMARY KEY (`id_reverse_del`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `review_ibfk_1` (`id_user`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `type_payer`
--
ALTER TABLE `type_payer`
  ADD PRIMARY KEY (`id_payer`);

--
-- Индексы таблицы `type_premise`
--
ALTER TABLE `type_premise`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id_department` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `packaging`
--
ALTER TABLE `packaging`
  MODIFY `id_packaging` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `reverse_delivery`
--
ALTER TABLE `reverse_delivery`
  MODIFY `id_reverse_del` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `type_payer`
--
ALTER TABLE `type_payer`
  MODIFY `id_payer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_premise`
--
ALTER TABLE `type_premise`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`type_payer`) REFERENCES `type_payer` (`id_payer`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_dep_rec`) REFERENCES `departments` (`id_department`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_department`) REFERENCES `departments` (`id_department`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`id_type`) REFERENCES `type_premise` (`id_type`),
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`reverse_delivery`) REFERENCES `reverse_delivery` (`id_reverse_del`),
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `orders_ibfk_7` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_8` FOREIGN KEY (`packaging`) REFERENCES `packaging` (`id_packaging`);

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

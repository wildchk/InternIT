-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2020 г., 09:43
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internships`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id_company`, `id_user`, `title`, `description`) VALUES
(23, 10, 'EGAR TECHNOLOGY, INC.', 'EGAR Technology - специализируется в области разработки программного обеспечения \r\n'),
(37, 10, 'Arconic. ', 'Arconic - разрабатывает революционные продукты, определяющие развитие целых индустрий. '),
(39, 10, 'WaveAccess', 'WaveAccess – международная ИТ-компания. Мы создаем надежные производительные решения'),
(40, 10, 'Solo it', 'Solo it - компания международного уровня, специялизирующая на веб-разработке');

-- --------------------------------------------------------

--
-- Структура таблицы `summary`
--

CREATE TABLE `summary` (
  `id_summary` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_job_seeker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `summary`
--

INSERT INTO `summary` (`id_summary`, `id_user`, `job`, `surname`, `name_job_seeker`, `patronymic`, `age`, `education`, `skills`) VALUES
(1, 11, 'Системный администратор', 'Кондрашкин', 'Михаил', 'Николаевич', 19, 'middle', ' Windows на уровне системного администратора (AD, Exchange, ISA, DNS и т.д);\r\n \r\n'),
(15, 1, 'Программист', 'Кукушкин', 'Анатолий', 'Архипович', 15, 'middle', 'С++, git,Unity 3D, работа в команде, опыт 3 года, знание MySQL'),
(21, 11, 'Разработчик PHP', 'Кондрашкин', 'Михаил', 'Николаевич', 17, 'middle', 'Знание PHP, MySQL, HTML, CSS, JavaScript (Ajax, jQuery).'),
(23, 11, 'Системный администратор, IT инженер', 'Васильев', 'Иван', 'Иванович', 31, 'high', 'Java, Python, Scala '),
(24, 11, 'HTML верстальщик', 'Кузнецов', 'Пётр', 'Ефимович', 27, 'middle', 'HTML, CSS, адаптивная вёрстка\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(4) NOT NULL,
  `boss` int(2) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `boss`, `user`, `password`) VALUES
(1, 0, 'mikhail2', '28467319'),
(10, 1, 'recruiter', 'zhtrhenth'),
(11, 0, 'mikhailphpdeveloper', 'z{jxedg[g'),
(14, 0, 'Миша', '2020'),
(15, 0, 'd', 'ds'),
(16, 1, 'вася', 'ваа');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `id_vacancy` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vacancy`
--

INSERT INTO `vacancy` (`id_vacancy`, `id_user`, `title`, `salary`, `company`, `description`) VALUES
(1, 10, 'HTML-верстальщик', 25000, 'ООО \"АКСЕСС МЕДИА ГРУПП\"', 'Обязанности: кроссбраузерная адаптивная верстка по макетам (Photoshop, Adobe XD)\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 10, 'Верстальщик', 30000, 'Команда-А', 'Обязанности: верстка сайтов, редактирование существующих проектов, b n/l14'),
(3, 10, 'Веб-разработчик', 45000, 'IQ-SITE', 'Условия: опыт создания сайтов на Framework и  удалённая работа'),
(4, 10, 'IT-специалист', 30000, 'ООО \"Телеком-ВИСТ\"', 'Установка и настройка сетевого оборудования (IP-телефоны, коммутаторы, voip-шлюзы) в соответсвии с планом работ на объектах Самарской области.'),
(5, 10, 'Программист', 45000, 'ООО Эверест', 'Удаленная работа,  1-3 года,  средне-специальное,  полная занятость'),
(6, 10, 'Программист', 40000, 'Самарагорэнергосбыт', 'Полный рабочий день,  1-3 года,  высшее,  полная занятость'),
(28, 10, 'Ит инженер', 25000, 'ООО \"АКСЕСС МЕДИА ГРУПП\"', 'Обязанности: кроссбраузерная адаптивная верстка по макетам (Photoshop, Adobe XD)\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(29, 10, 'Специалист', 30000, 'Команда-А', 'Обязанности: верстка сайтов, редактирование существующих проектов, b n/l14'),
(30, 10, 'Программист', 45000, 'IQ-SITE', 'Условия: опыт создания сайтов на Framework и работа удалённая со строгим графиком и обратной связью'),
(31, 10, 'IT-специалист', 30000, 'ООО \"Телеком-ВИСТ\"', 'Установка и настройка сетевого оборудования (IP-телефоны, коммутаторы, voip-шлюзы) в соответсвии с планом работ на объектах Самарской области.'),
(32, 10, 'QA Engeneer', 45000, 'ООО Эверест', 'Удаленная работа,  1-3 года,  средне-специальное,  полная занятость'),
(33, 10, 'HR менеджер', 40000, 'Самарагорэнергосбыт', 'Полный рабочий день,  1-3 года,  высшее,  полная занятость');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id_summary`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id_vacancy`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `summary`
--
ALTER TABLE `summary`
  MODIFY `id_summary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id_vacancy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `summary`
--
ALTER TABLE `summary`
  ADD CONSTRAINT `summary_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

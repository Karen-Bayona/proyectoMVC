-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2026 a las 07:05:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_articulos`
--

CREATE TABLE `tb_articulos` (
  `id_articulos` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autores` varchar(255) NOT NULL,
  `anio` int(11) NOT NULL,
  `revista` varchar(255) NOT NULL,
  `resumen` text NOT NULL,
  `palabras_clave` varchar(255) NOT NULL,
  `busqueda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_articulos`
--

INSERT INTO `tb_articulos` (`id_articulos`, `titulo`, `autores`, `anio`, `revista`, `resumen`, `palabras_clave`, `busqueda_id`) VALUES
(1, 'Percepción del aprendizaje de los alumnos universitarios con el uso de herramientas de inteligencia artificial', 'Cristina Gallego y Eduardo Dittmar ', 2026, 'Epsir', 'Introducción: En los últimos años, las herramientas de inteligencia artificial (IA) han comenzado a integrarse de manera significativa en el ámbito educativo, transformando la manera en que los estudiantes universitarios acceden al conocimiento y desarrollan competencias clave. Este artículo analiza la percepción que tienen los estudiantes universitarios sobre su aprendizaje al utilizar estas herramientas, abordando los factores del modelo UTAUT. Metodología: A partir de una revisión de literatura y una encuesta realizada a 108 estudiantes de grado se extraen las principales conclusiones respecto al uso y las percepciones de facilidad al utilizar la IA para sus trabajos académicos. Resultados: El análisis bibliométrico arroja que existe un aumento de la literatura en este campo a través de un análisis de co-ocurrencia se identifican las temáticas. Adicionalmente se detecta un uso superior al 90% en el uso de la IA, concretamente utilizando como herramienta Chat GPT por la percepción de facilidad, social utilidad y de accesibilidad al recurso. Discusión: Las diferencias observadas confirman los resultados obtenidos en estudios previos y ponen de relieve la necesidad de la alfabetización digital ante los retos de aprendizaje. Conclusiones: la mayoría de los estudiantes perciben que las herramientas de IA mejoran significativamente su experiencia de aprendizaje.', 'Percepción, Inteligencia Artificial, estudiantes, universitarios, tecnología, aprendizaje, herramientas digitales, uso', 1),
(2, 'Prototipado de una aplicación móvil utilizando Inteligencia Artificial para apoyar el diagnóstico de tuberculosis infanti', 'Katerine Souza Picoli, Flávia Regina Souza Ramos, Denise Maria Guerreiro Vieira da Silva, Bruno da Veiga Thurner, Daniel Souza Sacramento, Irineide Assumpção Antunes, Lucas Lorran Costa de Andrade y Amélia Nunes Sicsú.', 2025, 'Revista Brasileira de Enfermagem', 'Objetivos:  desarrollar un prototipo de aplicación móvil utilizando Inteligencia Artificial (IA) para predecir y apoyar el diagnóstico de tuberculosis pulmonar en niños – TB Kids.\r\n\r\nMétodos:  investigación de desarrollo tecnológico del tipo prototipado, basado en el modelo de Rational Unified Process y sus cuatro etapas: concepción, elaboración, construcción y transición. El desarrollo del prototipo de TB Kids se llevó a cabo desde noviembre de 2022 hasta julio de 2023.\r\n\r\nResultados:  el prototipo TB Kids cuenta con funcionalidades para evaluación de riesgos, evaluación nutricional, prueba cutânea de tuberculina, investigación de terapia antibiótica y contactos, interpretación de radiografías de tórax mediante IA con gráfico de riesgo y toma de decisiones, orientación adicional y registro del cuadro clínico.\r\n\r\nConclusiones:  el prototipo de aplicación móvil de alta fidelidad tiene una interfaz consistente, respondiendo con creatividad e innovación al Objetivo de Desarrollo Sostenible 3 y a la falta de software de predicción que utilice IA en el diagnóstico de niños en riesgo de tuberculosis.', 'Aplicaciones Móviles; Inteligencia Artificial; Tuberculosis Pulmonar; Niño; Diagnóstico', 3),
(3, 'Desarrollo de un chatbot para apoyo en salud mental utilizando inteligencia artificial', 'Iroda Sa’dulloyeva, Farkhod Raufov, Munisa Bakhadirova, Nargiza Nasirova, Ykhval Pekhanova, Iroda Mamarasulova, Barno Pulatova, Makhruya Khakimova.', 2024, 'Open MenuHealth Leadership and Quality of Life', 'People have been impacted by COVID-19 not just physically but also psychologically, and the epidemic has had a significant societal impact, particularly in underdeveloped nations. During such perplexing circumstances, there is undoubtedly a significant increase in psychosocial discomfort. On the other hand, more people are now seeking mental health assistance. The researcher identified a tool to help promote mental wellness and bring about a behavioural change in people\'s minds using the broaden and build theory of psychological wellness (Fredrickson 1998), with the goal of promoting positivity and mental well-being. This was done by utilising design research methodology and human centred design principles. Through the use of human-centered design, the study illustrated how issues can be found, verified, and their impact mitigated through the use of an intervention. In order to delve deeply into the problems that emerged during the COVID19 pandemic and ultimately lessen the psychological effects of a pandemic, the research will help the public in times of hardship and policy makers. By offering suitable, sympathetic insights and solutions in relation to human-centered design, and particularly in terms of design for the healthcare and wellness space, the study results also demonstrate further steps towards developing advanced design research during a psychosocial distress situation on people\'s mental wellness.', ' COVID pandemic, AI intelligent, Chatbot, deep learning', 5),
(4, 'Inteligencia artificial, big data y aplicaciones contra la COVID-19: Privacidad y protección de datos', 'Lorenzo Cotino Hueso', 2020, 'Revista de Internet, Derecho y Politica', 'Big data and AI did not succeed in preventing Covid-19, but they can be very useful in the fight against it and even for avoiding confinements and other restrictions on rights which it brings about. AI can be extremely useful for integrating, structuring and extracting an enormous quantity and variety of big data information and knowledge for biomedical research. It is also useful for improving civic and health assistance and information, telemedicine and the best assignment of human resources and materials. Even more threatening for privacy could be the development of apps, electronic biological passports, geolocation systems, and the traceability and monitoring of people in the fight against Covid-19, particularly if the Asian model is followed. However, it seems that this not being followed in the EU. There is an analysis of the applicable legal set of rules, the legal legitimation of the various data processing systems, and the need for a legal basis of quality, especially in the case of apps and searches. And besides the legal basis and legitimation, the necessary guarantees of these mass processing systems are considered, particularly of the apps. The impetus of law means that it is indeed technologically possible to maximise the efficiency of the fight against Covid-19 and to maximise all our rights.', 'Artificial intelligence; Covid-19; Data protection; Geolocation; Privacy', 4),
(5, 'Uso de la inteligencia artificial en el diagnóstico de alteraciones de la citología cervicouterina: estudio observacional en población universitaria', 'Jose Said Manzano-Chaya, Tania Mendoza-Herrera, Ernesto García-Ayala.', 2025, 'Biomedica : revista del Instituto Nacional de Salud', 'Introducción. La citología convencional (prueba de Papanicolaou) continúa siendo un pilar del tamizaje del cáncer cervicouterino en Colombia, pero su utilidad se ve opacada por una gran carga laboral y bajo rendimiento diagnóstico. El uso de la inteligencia artificial puede proveer una solución a este problema, sin embargo, no hay estudios que evalúen su utilidad en nuestra población. OBJETIVO: Evaluar y comparar la capacidad discriminativa de cuatro modelos de inteligencia artificial para detectar anormalidades en la citología cervicouterina. Materiales y métodos. Se obtuvieron 650 imágenes de células de citología cervicouterina convencional de una población universitaria del nororiente colombiano, las cuales fueron sometidas a evaluación diagnóstica por un patólogo experto. Mediante el análisis de imágenes digitales y aprendizaje profundo, se entrenaron cuatro modelos de inteligencia artificial (DenseNet, InceptionV3, MobileNet y VGG19) con los datos de una base de citología de acceso público, determinando la capacidad discriminativa de los modelos con su respectiva sensibilidad, especificidad y área bajo la curva. RESULTADOS: MobileNet tuvo la mejor capacidad discriminativa [área bajo la curva (AUC) de 0,97) con una especificidad del 0,99 y sensibilidad de 0,78 para la detección de alteraciones en la citología cervicouterina. Por otro lado, InceptionV3 tuvo un mejor desempeño en el tamizaje, con sensibilidad del 0,93, especificidad de 0,82 y área bajo la curva de 0,947. CONCLUSIONES: Nuestros resultados ilustran las ventajas y desventajas de diferentes modelos de inteligencia artificial y la forma como podrían ayudar a mejorar el rendimiento del tamizaje con citología convencional o, incluso, servir como método de tamizaje primario para descartar los casos negativos, lográndose un desempeño diagnóstico comparable con el de la lectura convencional.', 'Adult; Artificial Intelligence; Cervix Uteri; Colombia; Deep Learning; Early Detection of Cancer; Female; Humans; Middle Aged; Papanicolaou Test; Sensitivity and Specificity; Universities; Uterine Cervical Neoplasms; Vaginal Smears', 7),
(6, 'Artificial intelligence in internal medicine: knowledge, clinical use and training needs', 'J. García Alegría, C. García Tortosa, M.D. Martín Escalante, F. Miralles Linares, R. Puchades-Rincón de Arellano, M.M. Chimeno-Viñas.', 2026, 'Revista clinica espanola', 'BACKGROUND/OBJECTIVE: Artificial intelligence (AI) has been revolutionising medical practice in recent years. The aim of this study was to analyze the perception of self-knowledge, personal experience, degree of use and training needs in AI among Spanish internists who are members of the Spanish Society of Internal Medicine (SEMI) in order to guide their educational activities. MATERIALS AND METHODS: Cross-sectional study using an anonymous survey with demographic variables, categorical questions, multiple-choice questions, and open-ended qualitative questions. Descriptive analysis with differences between age groups. The minimum estimated sample size of representative members was 368. RESULTS: 504 valid responses were analyzed (82% specialists, 16% residents). Self-perceived knowledge of AI was mainly intermediate or basic, with higher levels among those under 30 and lower levels among those over 60. Three out of four respondents had used AI, mainly in clinical practice, followed by research and teaching. The main perceived barriers were lack of specific training, doubts about reliability and ethical-legal issues, as well as technological limitations and resistance to change. The vast majority considered AI training to be important or very important, with particular interest in practical clinical applications, basic fundamentals and tool evaluation. The willingness to incorporate AI into practice was high across all age groups. CONCLUSIONS: Spanish internists have varying levels of knowledge about artificial intelligence, with younger doctors having greater knowledge, and its main current use is in clinical practice. Lack of training is the main barrier to its incorporation, despite high demand for training and a general willingness to adopt it, highlighting the need for training programs and strategies for integrating AI into internal medicine. ', 'Actitudes y práctica en salud; Artificial intelligence; Attitudes and practices; Conocimientos; Cross-sectional study; Diffusion of innovations; Difusión de innovaciones; Digital health; Educación médica; Estudio transversal; Health knowledge; Inteligenci', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_busquedas`
--

CREATE TABLE `tb_busquedas` (
  `id_busqueda` int(11) NOT NULL,
  `estudiante` varchar(100) NOT NULL,
  `base_datos_busq` varchar(100) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `cadena_busqueda` varchar(255) NOT NULL,
  `cantidad_resultados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_busquedas`
--

INSERT INTO `tb_busquedas` (`id_busqueda`, `estudiante`, `base_datos_busq`, `tema`, `cadena_busqueda`, `cantidad_resultados`) VALUES
(1, 'Laura Franco', 'Scopus', 'IA en la educación', 'Inteligencia artificial AND educación OR aprendizaje', 289),
(3, 'Laura Franco', 'Scopus', 'IA en el desarrollo de Software', 'Artificial intelligence AND software development', 30),
(4, 'Laura Franco', 'Scopus', 'IA aplicada a la Analítica', 'Inteligencia artificial AND big data OR análisis de datos\r\n\r\n', 9),
(5, 'Karen Bayona', 'Scopus', 'IA aplicada a la Psicología y Psiquiatría', 'Inteligencia artificial AND salud mental\r\n\r\n', 4),
(6, 'Karen Bayona', 'Scopus', 'IA médica', 'Inteligencia artificial AND medicina\r\n\r\n', 67),
(7, 'Karen Bayona', 'Scopus', 'Diagnóstico Asistido por Computadora (IA)', 'Inteligencia artificial AND medicina OR diagnóstico\r\n\r\n', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_articulos`
--
ALTER TABLE `tb_articulos`
  ADD PRIMARY KEY (`id_articulos`),
  ADD KEY `FK1` (`busqueda_id`);

--
-- Indices de la tabla `tb_busquedas`
--
ALTER TABLE `tb_busquedas`
  ADD PRIMARY KEY (`id_busqueda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_articulos`
--
ALTER TABLE `tb_articulos`
  MODIFY `id_articulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_busquedas`
--
ALTER TABLE `tb_busquedas`
  MODIFY `id_busqueda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_articulos`
--
ALTER TABLE `tb_articulos`
  ADD CONSTRAINT `tb_articulos_ibfk_1` FOREIGN KEY (`busqueda_id`) REFERENCES `tb_busquedas` (`id_busqueda`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

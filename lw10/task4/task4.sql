SELECT
    id,
    lastname AS "Фамилия",
    name AS "Имя",
    middlename AS "Отчество",
    age AS "Возраст"
FROM                                   
    student
WHERE
    age LIKE 19;

SELECT
    student.lastname AS "Фамилия",
    student.name AS "Имя",
    student.middlename AS "Отчество",
    `group`.name AS "Группа"
FROM
    `group`
JOIN 
    student
ON
    student.`group_id` = `group`.id
WHERE
    `group`.name = 'ФК-13';

SELECT
    student.lastname AS "Фамилия",
    student.name AS "Имя",
    student.middlename AS "Отчество",
    faculty.name AS "Факультет"
FROM
    faculty
JOIN 
    `group`
ON
    `group`.faculty_id = faculty.id
JOIN
    student
ON
    student.`group_id` = `group`.id 
WHERE
    faculty.name = 'Экономический факультет';

SELECT
    student.lastname AS "Фамилия",
    student.name AS "Имя",
    student.middlename AS "Отчество",
    faculty.name AS "Факультет",
    `group`.name AS "Группа"
FROM
    student
JOIN
    `group`
ON
    `group`.id = student.`group_id`
JOIN
    faculty
ON
    faculty.id = `group`.faculty_id
WHERE
    student.lastname = 'Журавлев' AND student.name = 'Александр' AND student.middlename = 'Романович';
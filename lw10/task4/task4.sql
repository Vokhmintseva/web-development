SELECT
    id,
    lastname AS "�������",
    name AS "���",
    middlename AS "��������",
    age AS "�������"
FROM                                   
    student
WHERE
    age LIKE 19;

SELECT
    student.lastname AS "�������",
    student.name AS "���",
    student.middlename AS "��������",
    `group`.name AS "������"
FROM
    `group`
JOIN 
    student
ON
    student.`group_id` = `group`.id
WHERE
    `group`.name = '��-13';

SELECT
    student.lastname AS "�������",
    student.name AS "���",
    student.middlename AS "��������",
    faculty.name AS "���������"
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
    faculty.name = '������������� ���������';

SELECT
    student.lastname AS "�������",
    student.name AS "���",
    student.middlename AS "��������",
    faculty.name AS "���������",
    `group`.name AS "������"
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
    student.lastname = '��������' AND student.name = '���������' AND student.middlename = '���������';
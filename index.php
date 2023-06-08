<?php
require_once "helpers.php";
$projects  = [
    "Вхідні",
    "Навчання",
    "Робота",
    "Домашні справи",
    "Авто",
];
$tasks = [
    [
        "project" => "Робота",
        "title" => "Виконати тестове завдання",
        "due_date" => "25.07.23",
        "status" => "backlog",
    ],
    [
        "project" => "Домашні справи",
        "title" => "Замовити піццу",
        "due_date" => null,
        "status" => "to-do",
    ],
    [
        "project" => "Вхідні",
        "title" => "Зустрітись з друзями",
        "due_date" => "14.05.2023",
        "status" => "to-do",
    ],
    [
        "project" => "Навчання",
        "title" => "Зробити завдання до першого уроку",
        "due_date" => "27.04.2023",
        "status" => "done",
    ],
    [
        "project" => "Робота",
        "title" => "Співбесіда в IT компанії",
        "due_date" => "01.07.23",
        "status" => "backlog",
    ],
    [
        "project" => "Домашні справи",
        "title" => "Купити корм для кота",
        "due_date" => null,
        "status" => "in-progress",
    ],
];

function calculation_of_projects(array $data, string $project_name): int
{
    $i=0;
    foreach($data as $task)
    {
        if ($task["project"] ===  $project_name)
        {
            $i++;
        }
    }
    return $i;
}

$main_content = renderTemplate("kanban.php",[
    "name_project" => "bud sho",
    "tasks" => $tasks,

]);
$page_content = renderTemplate("main.php",[
  "user_photo" => "riba3",
  "tasks" => $tasks,
  "user_name" => "Dmitro",
  "projects" => $projects,
  "main_content" => $main_content,
]);


$layout = renderTemplate("layout.php",[
    "page_name" => "riba" ,
    "page_content" => $page_content,
    ]);
echo $layout;


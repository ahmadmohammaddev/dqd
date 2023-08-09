<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CcXHTgZDQcVxNztR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1iI1n7Fujb2TG6E3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/accounts/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QsAzmgGqYDEkUi2U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/add/cell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.add.cell',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/add/multicells' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.add.multicells',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/add/surahs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.add,surahs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/get/info/cell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.get.info.cell',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/get/info/multicells' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.get.info.multicells',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/get/info/surahs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.get.info.surahs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quran/student/recitation/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.student.recitation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/education/books/names' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.books.names',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/education/group/lesson/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.group.lesson.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/managemnet/students/group/students/attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'managemnet.students.students.attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rewards/students/points/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.points.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rewards/student/points/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.points.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rewards/student/points/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.points.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4F0aDVahspZ8PM70',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/export-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'export.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sss',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts/registeration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account.registeration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/add/cells' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.add_cells',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/post/cell/multi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.post_multi_cells',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/add/cell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.add_cell',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/post/cell/one' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.post_one_cell',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/add/surahs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.add_surahs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/post/surahs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.post_surahs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/show/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.show_home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/show/student/selector' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.show.student_selector',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quran/show/student/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.show.student_info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/courses/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.courses.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/courses/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.courses.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/courses/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.courses.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/profile/main_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.editstudent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.students.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/required/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.required.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/required/data/parent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.parent.required.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/register/parent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.parent.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/profile/relative_info/edit/apply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.relative.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/profile/quran_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.quraninfo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/profile/quran_info_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.quraninfo.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/profile/education' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.education',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/duties/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.show.courses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/duties/group/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.students.show.to.add.duties',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/duties/group/students/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.students.add.duties',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/duties/show/readonly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.students.duties.readonly',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/points/student/selector' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.points.students.selector',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/points/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.points.student.show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/students/points/course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.points.course.points',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/staff/required/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.required.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/staff/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/staff/main' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/staff/profile/qualification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.profile.qualification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/management/attendance/students/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.attendance.students.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/educational/student/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'educational.student.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/(?|quran/(?|courses/names/([^/]++)(*:46)|group(?|s/names/([^/]++)(*:77)|/students/names/([^/]++)(*:108)))|education/(?|group(?|s/names/([^/]++)(*:155)|/(?|students/names/([^/]++)(*:190)|lesson(?|s/given/([^/]++)(*:223)|/(?|add/([^/]++)(*:247)|update/([^/]++)(*:270)))))|book/sections/([^/]++)(*:304))|managemnet/students/group(?|s/names/([^/]++)(*:357)|/students/names/([^/]++)(*:389))|rewards/student/points/get/([^/]++)(*:433))|/management/(?|st(?|udents/(?|profile/(?|brief/([^/]++)(*:497)|relative_info(?|_selector/([^/]++)(*:539)|/edit/([^/]++)/([^/]++)(*:570))|edit/(?|([^/]++)(*:595)|apply(*:608)))|duties/groups/([^/]++)(*:640))|aff/profile/(?|brief/([^/]++)(*:678)|edit/(?|([^/]++)(*:702)|apply(*:715))|qualifications/([^/]++)(*:747)))|attendance/students/show/(?|groups/([^/]++)(*:800)|students/([^/]++)(*:825))))/?$}sDu',
    ),
    3 => 
    array (
      46 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.courses.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.groups.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quran.group.students.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.groups.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.group.students.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.group.lessons.given',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.group.lesson.add',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.group.lesson.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'education.book.sections',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'managemnet.students.groups.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'managemnet.students.students.names',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.points.get',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.brief',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.parentinfo.selector',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.relative.profile.show.to.edit',
          ),
          1 => 
          array (
            0 => 'relative_id',
            1 => 'student_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.show.to.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.profile.edit',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.student.show.groups',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.profile.brief',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.profile.show.to.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.profile.edit',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.staff.profile.qualifications',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.attendance.students.show.groups',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'management.attendance.show.students',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::CcXHTgZDQcVxNztR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::CcXHTgZDQcVxNztR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1iI1n7Fujb2TG6E3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005c80000000000000000";}";s:4:"hash";s:44:"wQ4TwSWZYsuwPjjFF8yiS2T3eoagNbVo0pJ4C4j6wxI=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1iI1n7Fujb2TG6E3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QsAzmgGqYDEkUi2U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/accounts/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\auth_controller@login',
        'controller' => 'App\\Http\\Controllers\\auth_controller@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QsAzmgGqYDEkUi2U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.courses.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/courses/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_courses_names',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_courses_names',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.courses.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.groups.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/groups/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_groups_names',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_groups_names',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.groups.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.group.students.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/group/students/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_names',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_names',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.group.students.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/student/recitation/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_recitation_info',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_recitation_info',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.add.cell' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quran/student/recitation/add/cell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_one_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_one_cell',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.add.cell',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.add.multicells' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quran/student/recitation/add/multicells',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_multi_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_multi_cell',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.add.multicells',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.add,surahs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quran/student/recitation/add/surahs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_surahs',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_surahs',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.add,surahs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.get.info.cell' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/student/recitation/get/info/cell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cell',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.get.info.cell',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.get.info.multicells' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/student/recitation/get/info/multicells',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cells',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cells',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.get.info.multicells',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.get.info.surahs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/student/recitation/get/info/surahs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_surahs',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_surahs',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.get.info.surahs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quran/student/recitation/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/quran/student/recitation/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.student.recitation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/quran/student/recitation/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.student.recitation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.groups.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education/groups/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.groups.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.group.students.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education/group/students/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.group.students.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.books.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education/books/names',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.books.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.book.sections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education/book/sections/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.book.sections',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.group.lessons.given' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education/group/lessons/given/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.group.lessons.given',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.group.lesson.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/education/group/lesson/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.group.lesson.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.group.lesson.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/education/group/lesson/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.group.lesson.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'education.group.lesson.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/education/group/lesson/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/education',
        'where' => 
        array (
        ),
        'as' => 'education.group.lesson.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'managemnet.students.groups.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/managemnet/students/groups/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@test',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/managemnet',
        'where' => 
        array (
        ),
        'as' => 'managemnet.students.groups.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'managemnet.students.students.names' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/managemnet/students/group/students/names/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@test',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/managemnet',
        'where' => 
        array (
        ),
        'as' => 'managemnet.students.students.names',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'managemnet.students.students.attendance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/managemnet/students/group/students/attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@post_attendance',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@post_attendance',
        'namespace' => NULL,
        'prefix' => 'api/managemnet',
        'where' => 
        array (
        ),
        'as' => 'managemnet.students.students.attendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.points.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/rewards/students/points/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/rewards',
        'where' => 
        array (
        ),
        'as' => 'students.points.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.points.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/rewards/student/points/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@test',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@test',
        'namespace' => NULL,
        'prefix' => 'api/rewards',
        'where' => 
        array (
        ),
        'as' => 'student.points.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.points.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/rewards/student/points/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/rewards',
        'where' => 
        array (
        ),
        'as' => 'student.points.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.points.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/rewards/student/points/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@post_test',
        'namespace' => NULL,
        'prefix' => 'api/rewards',
        'where' => 
        array (
        ),
        'as' => 'student.points.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4F0aDVahspZ8PM70' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:304:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:86:"function () {
    //return view(\'general.index\');
    return \\view(\'general.index\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005cb0000000000000000";}";s:4:"hash";s:44:"KUsvQpMJa9ZXnnMK1Z62Us3jd8a43oTqmiC4XJxqd8w=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4F0aDVahspZ8PM70',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'export.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'export-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'QuranAController@export',
        'controller' => 'QuranAController@export',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'export.pdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@test',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@test',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sss' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@sss',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@sss',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account.registeration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/registeration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\auth_controller@registeration',
        'controller' => 'App\\Http\\Controllers\\auth_controller@registeration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account.registeration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:273:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () {
        return \\view(\'quran.home\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005ef0000000000000000";}";s:4:"hash";s:44:"Ljh94OT7XlVnKeBQcvSGTEk1rgFxFtbQB3fnEAHMTko=";}}',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.add_cells' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/add/cells',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cells',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cells',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.add_cells',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.post_multi_cells' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quran/post/cell/multi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_multi_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_multi_cell',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.post_multi_cells',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.add_cell' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/add/cell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_cell',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.add_cell',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.post_one_cell' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quran/post/cell/one',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_one_cell',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_one_cell',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.post_one_cell',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.add_surahs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/add/surahs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_surahs',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_basic_info_for_surahs',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.add_surahs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.post_surahs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quran/post/surahs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_surahs',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@post_surahs',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.post_surahs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.show_home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/show/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.show_home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'quran.show.home',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.show.student_selector' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/show/student/selector',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@student_selector',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@student_selector',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.show.student_selector',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quran.show.student_info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quran/show/student/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info',
        'namespace' => NULL,
        'prefix' => '/quran',
        'where' => 
        array (
        ),
        'as' => 'quran.show.student_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.courses.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/courses/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@manin_home',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@manin_home',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.courses.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.courses.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/courses/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@addCourse',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@addCourse',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.courses.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.courses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'management/courses/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@editCourse',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_courses_controller@editCourse',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.courses.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.editstudent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/main_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_main_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_main_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.editstudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.students.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@main_home',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@main_home',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.students.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.brief' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/brief/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@brief_student_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@brief_student_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.brief',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.required.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/required/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@data_to_add_student',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@data_to_add_student',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.required.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.parent.required.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/required/data/parent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@data_to_add_parent',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@data_to_add_parent',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.parent.required.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@register_student',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@register_student',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.parent.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/register/parent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@register_parent',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@register_parent',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.parent.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.parentinfo.selector' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/relative_info_selector/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@student_relative_info_selector',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@student_relative_info_selector',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.parentinfo.selector',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.relative.profile.show.to.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/relative_info/edit/{relative_id}/{student_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_relative_main_info_to_edit',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_relative_main_info_to_edit',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.relative.profile.show.to.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.relative.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/profile/relative_info/edit/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_relative_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_relative_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.relative.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.quraninfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/quran_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.quraninfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.quraninfo.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/quran_info_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info_details',
        'controller' => 'App\\Http\\Controllers\\quran_department\\quran_a_controller@get_students_info_details',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.quraninfo.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.education' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/education',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@student_info',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@student_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.education',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.show.to.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/profile/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_student_main_info_to_edit',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_student_main_info_to_edit',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.show.to.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/profile/edit/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_main_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@edit_student_main_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.show.courses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/duties/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_courses',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_courses',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.show.courses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.student.show.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/duties/groups/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_groups',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_groups',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.student.show.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.students.show.to.add.duties' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/duties/group/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_students_to_add_duties',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_students_to_add_duties',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.students.show.to.add.duties',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.students.add.duties' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/duties/group/students/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@students_add_duties',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@students_add_duties',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.students.add.duties',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.students.duties.readonly' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/duties/show/readonly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@students_duties',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@students_duties',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.students.duties.readonly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.points.students.selector' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/points/student/selector',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@student_selector',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@student_selector',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'students.points.students.selector',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.points.student.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/students/points/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@student_points_calaculator',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@student_points_calaculator',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'students.points.student.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.points.course.points' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/students/points/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\rewards_department\\points_controller@course_points',
        'controller' => 'App\\Http\\Controllers\\rewards_department\\points_controller@course_points',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'students.points.course.points',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.required.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/required/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@data_to_add_staff',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@data_to_add_staff',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.required.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/staff/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@register_staff',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@register_staff',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/main',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@staff_main_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@staff_main_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.profile.brief' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/profile/brief/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@brief_staff_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@brief_staff_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.profile.brief',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.profile.show.to.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/profile/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@show_staff_main_info_to_edit',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@show_staff_main_info_to_edit',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.profile.show.to.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/staff/profile/edit/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@edit_staff_main_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@edit_staff_main_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.profile.qualification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/profile/qualification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@staff_info',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@staff_info',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.profile.qualification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.staff.profile.qualifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/staff/profile/qualifications/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@get_qualifications',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_staff_controller@get_qualifications',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.staff.profile.qualifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.attendance.students.show.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/attendance/students/show/groups/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_groups',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_groups',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.attendance.students.show.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.attendance.show.students' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'management/attendance/students/show/students/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_students',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@show_students',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.attendance.show.students',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'management.attendance.students.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'management/attendance/students/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\management_department\\management_students_controller@post_student_attndance',
        'controller' => 'App\\Http\\Controllers\\management_department\\management_students_controller@post_student_attndance',
        'namespace' => NULL,
        'prefix' => '/management',
        'where' => 
        array (
        ),
        'as' => 'management.attendance.students.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'educational.student.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'educational/student/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\education_department\\education_a_controller@student_info',
        'controller' => 'App\\Http\\Controllers\\education_department\\education_a_controller@student_info',
        'namespace' => NULL,
        'prefix' => '/educational',
        'where' => 
        array (
        ),
        'as' => 'educational.student.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

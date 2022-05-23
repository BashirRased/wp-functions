<?php

// 01. the_author() function
the_author(
'$deprecated = string, optional',
'$deprecated_echo = bool, optional, true'
);

the_author();

// 02. get_the_author() function
get_the_author(
'$deprecated = string, optional'
);

echo get_the_author();

// 03. the_author_meta() function
the_author_meta(
'$field= string, optional',
'$user_id = int/false, optional, false'
);

the_author_meta();

// 04. get_the_author_meta() function
get_the_author_meta(
'$field= string, optional',
'$user_id = int/false, optional, false'
);

echo get_the_author_meta();

/*
the_author_meta() field List:-
01. ID
02. first_name
03. last_name
04. display_name
05. nickname
06. description
07. user_firstname
08. user_lastname
09. user_nicename
10. user_email
11. user_login
12. user_pass
13. user_registered
14. user_description
15. user_activation_key
16. user_status
17. user_url
18. user_level
19. admin_color
20. aim
21. comment_shortcuts
22. jabber
23. plugins_last_view
24. plugins_per_page
25. rich_editing
26. syntax_highlighting
27. yim
*/
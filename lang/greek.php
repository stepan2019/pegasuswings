<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'ΑΡΧΙΚΗ';
$lng['navbar']['login'] = 'ΕΙΣΟΔΟΣ';
$lng['navbar']['logout'] = 'ΕΞΟΔΟΣ';
$lng['navbar']['recent_ads'] = 'ΠΡΟΣΦΑΤΕΣ ΑΓΓΕΛΙΕΣ';
$lng['navbar']['register'] = 'ΕΓΓΡΑΦΗ';
$lng['navbar']['submit_ad'] = 'ΑΠΟΣΤΟΛΗ ΣΕ ΕΝΑ ΦΙΛΟ';
$lng['navbar']['editad'] = 'MΕΤΑΤΡΟΠΗ ΑΓΓΕΛΙΑΣ';
$lng['navbar']['my_account'] = 'Ο ΛΟΓΑΡΙΑΣΜΟΣ ΜΟΥ';
$lng['navbar']['administrator_panel'] = 'ΠΑΝΕΛ ΔΙΑΧΕΙΡΙΣΤΗ';
$lng['navbar']['contact'] = 'ΕΠΙΚΟΙΝΩΝΙΑ';
$lng['navbar']['contactmail'] = 'Μπορείτε να συμπληρώσετε τη φόρμα επικοινωνίας ή e-mail στο realgreekhome@gmail.com';
$lng['navbar']['contactfooter'] = 'Επικοινωνία αλληλογραφίας: realgreekhome@gmail.com';
$lng['navbar']['password_recovery'] = 'ΑΝΑΚΤΗΣΗ ΤΟΥ Password';
$lng['navbar']['renew_listing'] = 'ΑΝΑΝΕΩΣΗ ΑΓΓΕΛΙΑΣ';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Αποστολή';
$lng['general']['search'] = 'Αναζήτηση';
$lng['general']['contact'] = 'Επικοινωνία';
$lng['general']['activeads'] = 'Ενεργές αγγελίες';
$lng['general']['activead'] = 'Ενεργή αγγελία';
$lng['general']['subcats'] = 'υποκατηγορίες';
$lng['general']['subcat'] = 'υποκατηγορία';
$lng['general']['view_ads'] = 'Δείτε αγγελίες';
$lng['general']['back'] = 'Επιστροφή';
$lng['general']['goto'] = 'Πηγαίνετε στην';
$lng['general']['page'] = 'Σελίδα';
$lng['general']['of'] = 'από';
$lng['general']['other'] = 'Άλλο';
$lng['general']['NA'] = 'N/A';
$lng['general']['add'] = 'Προσθήκη';
$lng['general']['delete_all'] = 'Ακυρώστε όλες τις επιλογές';
$lng['general']['action'] = 'Δράση';
$lng['general']['edit'] = 'Mετατροπή';
$lng['general']['delete'] = 'Ακύρωση';
$lng['general']['total'] = 'Συνολικά';
$lng['general']['min'] = 'Ελάχιστη';
$lng['general']['max'] = 'Μέγιστη';
$lng['general']['free'] = 'Δωρεάν';
$lng['general']['not_authorized'] = 'Δεν έχετε κατάλληλη εξουσιοδότηση για την προβολή αυτής της σελίδας!';
$lng['general']['access_restricted'] = 'Η \'πρόσβαση στην σελίδα είναι απαγορευμένη!';
$lng['general']['featured_ads'] = 'Αγγελίες πρώτης σελίδας';
$lng['general']['latest_ads'] = 'Τελευταία Ακίνητα';
$lng['general']['quick_search'] = 'Ταχεία αναζήτηση';
$lng['general']['go'] = 'Μετάβαση';
$lng['general']['unlimited'] = 'Απεριόριστο';
$lng['general']['notification']='κοινοποίηση';
$lng['general']['social_media'] = 'Social media';
$lng['general']['responsible'] = 'Δεν είμαστε υπεύθυνοι για το περιεχόμενο της διαφήμισης';

// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Υπάρχει ένα αρχείο με το ίδιο όνομα και δεν δεν μπορεί να αντικατασταθεί!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Δεν έχετε την άδεια για να μεταφορτώσετε πιο μεγάλα αρχεία από ::MAX_FILE_UPLOAD_SIZE::K !'; // si prega di lasciare intatto il tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Οι διαστάσεις των εικόνων είναι πολύ μεγάλες! Παρακαλείστε να μεταφορτώσετε ένα αρχείο μέγιστο ::MAX_FILE_WIDTH::px και μέγιστο πλάτος ::MAX_FILE_HEIGHT::px ύψος !';  //si prega di lasciare intatto questo tag ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Το αρχείο δεν μπορεί να μεταφορτωθεί!';
$lng['images']['errors']['no_file'] = 'Παρακαλείστε να επιλέξετε ένα αρχείο προς μεταφόρτωση!';
$lng['images']['errors']['no_folder'] = 'Ο φάκελος δεν υπάρχει!';
$lng['images']['errors']['folder_not_writeable'] = 'Ο φάκελος είναι εγγράψιμος!';
$lng['images']['errors']['file_type_not_accepted'] = 'Ο τύπος του αρχείου που μεταφορτώσατε δεν είναι αρχείο εικόνας ή δεν υποστηρίζεται!';
$lng['images']['errors']['error'] = 'Πραγματοποιήθηκε σφάλμα κατά την μεταφόρτωση του αρχείου! Το\'σφάλμα είναι: ::ERROR::'; // Lasciare intatto questo tag ::ERROR::
$lng['images']['errors']['no_thmb_folder'] = 'Δεν υπάρχει εικονίδιο στον φάκελο μεταφόρτωσης!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Ο φάκελος εικονιδίων μεταφόρτωσης δεν είναι επαναγράψιμος!';
$lng['images']['errors']['no_jpg_support'] = 'Δεν υποστηρίζεται το αρχείο JPG!';
$lng['images']['errors']['no_png_support'] = 'Δεν υποστηρίζεται το αρχείο PNG!';
$lng['images']['errors']['no_gif_support'] = 'Δεν υποστηρίζεται το αρχείο GIF!';
$lng['images']['errors']['jpg_create_error'] = 'Σφάλμα κατά την δημιουργία της \'εικόνας JPG!';
$lng['images']['errors']['png_create_error'] = 'Σφάλμα κατά την δημιουργία της\'εικόνας PNG!';
$lng['images']['errors']['gif_create_error'] = 'Σφάλμα κατά την δημιουργία της\'εικόνας GIF!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Είσοδος';
$lng['login']['logout'] = 'Έξοδος';
$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Password';
$lng['login']['forgot_pass'] = 'Ξεχάσατε το password;';
$lng['login']['click_here'] = 'Πατήστε εδώ';

$lng['login']['errors']['password_missing'] = 'Παρακαλώ πληκρολογήστε το password!';
$lng['login']['errors']['username_missing'] = 'Παρακαλώ πληκτρολογήστε το Username!';
$lng['login']['errors']['username_invalid'] = 'Το Username δεν είναι έγκυρο!';
$lng['login']['errors']['invalid_username_pass'] = 'Το Username και το password δεν είναι έγκυρα!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Έξοδος';
$lng['logout']['loggedout'] = 'Να πάτε στο καλό!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Εγγραφή';
$lng['users']['repeat_password'] = 'Επανάληψη Password';
$lng['users']['image_verification_info'] = 'Εισάγετε την λέξη που βλέπετε στην παρακάτω εικόνα.<br />Οι χαρακτήρες που χρησιμοποιούνται είναι τα μικρά γράμματα από A έως H <br /> και οι αριθμοί από 1 έως 9.';
$lng['users']['already_logged_in'] = 'Έχετε είδη πραγματοποιήσει είσοδο!';
$lng['users']['select'] = 'Επιλογή';

$lng['users']['info']['activate_account'] = 'Σας αποστείλαμε ένα e-mail στον λογαριασμό σας. Παρακαλείστε να ακολουθήσετε τις υποδείξεις για να ενεργοποιήσετε το λογαριασμό!';
$lng['users']['info']['welcome_user'] = 'Ο λογαριασμός σας δημιουργήθηκε. Πατήστε <a href="login.php">εδώ</a> για να εισέλθετε στο λογαριασμό σας!';
$lng['users']['info']['awaiting_admin_verification'] = 'Αναμονή για έγκριση του λογαριασμού σας. Θα σας αποσταλεί ένα e-mail για την επιβεβαίωση της ενεργοποίησης.';
$lng['users']['info']['account_info_updated'] = 'Οι πληροφορίες στον λογαριασμό σας ανανεώθηκαν!';
$lng['users']['info']['password_changed'] = 'Το password σας άλλαξε!';
$lng['users']['info']['account_activated'] = 'Ο λογαριασμός σας ενεργοποιήθηκε! Πατήστε <a href="login.php">εδώ</a> για εισαγωγή.';

$lng['users']['errors']['username_missing'] = 'Παρακαλώ εισάγετε το username!';
$lng['users']['errors']['invalid_username'] = 'Μην έγκυρο username!';
$lng['users']['errors']['username_exists'] = 'Αυτό το username υπάρχει είδη! Παρακαλείστε να εισέλθετε με τον είδη υπάρχοντα λογαριασμό!';
$lng['users']['errors']['email_missing'] = 'Παρακαλώ να εισάγετε την διεύθυνση e-mail!';
$lng['users']['errors']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['users']['errors']['passwords_dont_match'] = 'Μη έγκυρο Password!';
$lng['users']['errors']['email_exists'] = 'Αυτή η διεύθυνση e-mail υπάρχει είδη! Παρακαλείστε να εισέλθετε με τον είδη υπάρχοντα λογαριασμό!';
$lng['users']['errors']['password_missing'] = 'Παρακαλώ εισάγετε το password!';
$lng['users']['errors']['invalid_validation_string'] = 'Μη έγκυρη γραμμή επικύρωσης!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Μη έγκυρος λογαριασμός ή κλειδί ενεγοποίησης! Επικοινωνήστε μαζί μας!';
$lng['users']['errors']['account_already_active'] = 'Ο λογαριασμός σας είναι είδη ενεργός!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Κωδικός ιδιοκτησίας';
$lng['listings']['category'] = 'Κατηγορία';
$lng['listings']['package'] = 'Πακέτο';
$lng['listings']['price'] = 'Τιμή';
$lng['listings']['ad_description'] = 'Περιγραφή αγγελίας';
$lng['listings']['title'] = 'Tίτλος';
$lng['listings']['description'] = 'Περιγραφή';
$lng['listings']['image'] = 'Εικόνα';
$lng['listings']['words_left'] = 'λέξεις';
$lng['listings']['enter_photos'] = 'Κάντε κλικ στη φωτογραφική μηχανή για να ανεβάσετε τις φωτογραφίες';
$lng['listings']['ad_information'] = 'Πληροφορία αγγελίας';
$lng['listings']['free'] = 'Δωρεάν';
$lng['listings']['details'] = 'Πληροφορίες';
$lng['listings']['stock_no'] = 'Δεν ακίνητο';
$lng['listings']['location'] = 'Θέση';
$lng['listings']['contact_info'] = 'Επικοινωνία';
$lng['listings']['email_seller'] = 'E-mail πωλητή';
$lng['listings']['no_recent_ads'] = 'Καμία πρόσφατη αγγελία';
$lng['listings']['no_ads'] = 'Δεν υπάρχουν αγγελίες σε αυτή την κατηγορία!';
$lng['listings']['added_on'] = 'Αποστολή σε';
$lng['listings']['send_mail'] = 'Αποστολή e-mail σε χρήστες';
$lng['listings']['details'] = 'Λεπτομέρειες';
$lng['listings']['user'] = 'Χρήστης';
$lng['listings']['price'] = 'Τιμή';
$lng['listings']['confirm_delete'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε την αγγελία;';
$lng['listings']['confirm_delete_all'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε τις επιλεγμμένες αγγελίες;';
$lng['listings']['all'] = 'Όλες οι αγγελίες';
$lng['listings']['active_listings'] = 'Ενεργές αγγελίες';
$lng['listings']['pending_listings'] = 'Αγγελίες σε αναμονή';
$lng['listings']['featured_listings'] = 'Αγγελίες πρώτης σελίδας';
$lng['listings']['expired_listings'] = 'Ληγμένες αγγελίες';
$lng['listings']['active'] = 'Ενεργή';
$lng['listings']['inactive'] = 'Ανενεργή';
$lng['listings']['pending'] = 'Σε αναμονή';
$lng['listings']['featured'] = 'Στην πρώτη σελίδα';
$lng['listings']['expired'] = 'scaduta';
$lng['listings']['order_by_date'] = 'Ordina per data';
$lng['listings']['order_by_category'] = 'Κατηγοριοποίηση ανά κατηγορία';
$lng['listings']['order_by_make'] = 'Ταξινόμηση κατά Μάρκα';
$lng['listings']['order_by_price'] = 'Κατηγοριοποίηση ανά τιμή';
$lng['listings']['order_by_views'] = 'Κατηγοριοποίηση ανά προβολές';
$lng['listings']['order_asc'] = 'Αύξουσα';
$lng['listings']['order_desc'] = 'Φθίνουσα';
$lng['listings']['id'] = 'Αναζήτηση βάσει αριθμού διαφημίσεων';
$lng['listings']['views'] = 'Προβολές';
$lng['listings']['date'] = 'Ημερομηνία';
$lng['listings']['no_listings'] = 'Καμία αγγελία';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Δεν υπάρχει!';
$lng['listings']['mark_sold'] = 'Σηματοδότηση ως Πουλημένο';
$lng['listings']['mark_unsold'] = 'Αποεπιλογή κατά την πώληση';
$lng['listings']['sold'] = 'Πουλήθηκε';
$lng['listings']['feature'] = 'Χαρακτηριστικό';
$lng['listings']['expired_on'] = 'Ημερομηνία λήξης';
$lng['listings']['renew'] = 'Ενημέρωση';
$lng['listings']['print_page'] = 'Εκτύπωση';
$lng['listings']['recommend_this'] = 'Προτείνετέ το';
$lng['listings']['more_listings'] = 'Άλλες αγγελίες αυτού του χρήστη';
$lng['listings']['all_listings_for'] = 'Όλες οι αγγελίες του';
$lng['listings']['free_category'] = 'Κατηγορία Δωρεάν';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Είστε σίγουρος πως θέλετε να σβήσετε την εικόνα αυτής της αγγελίας;';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Υπέρβαση αριθμού λέξεων! Μπορείτε να γράψετε το μέγιστο ::MAX:: λέξεις'; // lasciare intatto il tag ::MAX::
$lng['listings']['errors']['badwords']='Εντόπισα απαγορευμένες λέξεις! Καταγράφω το IP σου και σε περίπτωση επανάληψης θα μηνυθείς!';
$lng['listings']['errors']['title_missing']='Παρακαλώ εισάγετε τίτλο για την αγγελία σας!';
$lng['listings']['errors']['category_missing']='Επιλέξτε μια κατηγορία!';
$lng['listings']['errors']['invalid_category']='Μη έγκυρη κατηγορία!';
$lng['listings']['errors']['package_missing']='Απουσία πακέτου!';
$lng['listings']['errors']['invalid_package']='Μη έγκυρο πακέτο!';
$lng['listings']['errors']['content_missing']='Παρακαλώ εισάγετε το περιεχόμενο της αγγελίας σας!';
$lng['listings']['errors']['invalid_price']='Μη έγκυρη τιμή!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Ελάχιστη Τιμή';
$lng['quick_search']['price_high'] = 'Μέγιστη Τιμή';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Δημιουργία αγγελίας';
$lng['useraccount']['browse_your_listings'] = 'Διαχείριση αγγελιών';
$lng['useraccount']['modify_account_info'] = 'Πληροφορίες λογαριασμού';
$lng['useraccount']['order_history'] = 'Ιστορικο παραγγελιων';
$lng['useraccount']['total_listings'] = 'Ολικές αγγελίες';
$lng['useraccount']['total_views'] = 'Ολικές προβολές';
$lng['useraccount']['active_listings'] = 'Ενεργές αγγελίες';
$lng['useraccount']['pending_listings'] = 'Αγγελίες σε αναμονή';
$lng['useraccount']['last_login'] = 'Τελευταία είσοδος';
$lng['useraccount']['last_login_ip'] = 'Τελευταία είσοδος IP';
$lng['useraccount']['expired_listings'] = 'Ληγμένες αγγελίες';
$lng['useraccount']['statistics'] = 'Στατιστικά';
$lng['useraccount']['welcome'] = 'Καλώς Ήρθατε';
$lng['useraccount']['contact_name'] = 'Όνομα επαφής';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Password';
$lng['useraccount']['repeat_password'] = 'Επανάληψη Password';
$lng['useraccount']['change_password'] = 'Αλλαγή Password';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'σε';
$lng['advanced_search']['price_min'] = 'Ελάχιστη Τιμή';
$lng['advanced_search']['price_max'] = 'Mέγιστη τιμή';
$lng['advanced_search']['word'] = 'Keyword';
$lng['advanced_search']['sort_by'] = 'Ταξινόμηση κατά';
$lng['advanced_search']['sort_by_price'] = 'Ταξινόμηση τιμής';
$lng['advanced_search']['sort_by_date'] = 'Ταξινόμηση ημερομηνίας';
$lng['advanced_search']['sort_by_make'] = 'Ταξινόμηση Μάρκας';
$lng['advanced_search']['sort_descendant'] = 'Ταξινόμηση Αύξουσα';
$lng['advanced_search']['sort_ascendant'] = 'Ταξινόμηση Φθίνουσα';
$lng['advanced_search']['only_ads_with_pic'] = 'Μόνο αγγελίες με φωτογραφίες';
$lng['advanced_search']['no_results'] = 'Δεν βρέθηκαν αγγελίες που αντιστοιχούν στην αναζήτησή σας!';
$lng['advanced_search']['multiple_ads_matching'] = 'Δεν υπάρχουν αγγελίες ::NO_ADS:: που αντιστοιχούν στην αναζήτησή σας!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Δεν είναι αγγελία που αντιστοιχεί στην αναζήτησή σας!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Όνομα';
$lng['contact']['subject'] = 'Αντικείμενο';
$lng['contact']['email'] = 'E-mail';
$lng['contact']['webpage'] = 'ιστοσελίδα με http: //';
$lng['contact']['comments'] = 'Σχόλια';
$lng['contact']['message_sent'] = 'Το μήνυμά σας απεστάλλει!';
$lng['contact']['sending_message_failed'] = 'Η αποστολή του e-mail δεν ήταν εφικτή!';
$lng['contact']['mailto'] = 'Αποστολή σε';

$lng['contact']['error']['name_missing'] = 'Εισάγετε το ονομά σας!';
$lng['contact']['error']['subject_missing'] = 'Εισλαγετε το αντικειμένο!';
$lng['contact']['error']['email_missing'] = 'Παρακαλείστε να εισάγετε το e-mail σας!';
$lng['contact']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['contact']['error']['comments_missing'] = 'Εισάγετε σχόλιο!';
$lng['contact']['error']['invalid_validation_number'] = 'Μη έγκυρος αριθμός επικύρωσης!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Διεύθυνση e-mail';
$lng['password_recovery']['new_password'] = 'Νέο password';
$lng['password_recovery']['repeat_new_password'] = 'Επαναλάβετε νέο Password';
$lng['password_recovery']['invalid_key'] = 'Μη έγκυρο κλειδί';

$lng['password_recovery']['email_missing'] = 'Εισάγετε την νέα διεύθυνση e-mail!';
$lng['password_recovery']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail';
$lng['password_recovery']['email_inexistent'] = 'Δεν υπάρχει χρήστης με αυτή την διεύθυνση e-mail!';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Ποσό';
$lng['packages']['words'] = 'Λέξεις';
$lng['packages']['days'] = 'Ημέρες';
$lng['packages']['pictures'] = 'Εικόνες';
$lng['packages']['picture'] = 'Εικόνα';
$lng['packages']['available'] = 'Διαθέσιμο';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Επεξεργαστής';
$lng['order_history']['amount'] = 'Ποσό';
$lng['order_history']['completed'] = 'Ολοκληρώθηκε';
$lng['order_history']['not_completed'] = 'Δεν ολοκληρώθηκε';
$lng['order_history']['ad_no'] = 'Αγγελία id';
$lng['order_history']['date'] = 'Ημερομηνία';
$lng['order_history']['no_actions'] = 'Q.t εγγεγραμμένες αγγελίες';
$lng['order_history']['order_by_date'] = 'Ταξινόμηση κατά ημερομηνία';
$lng['order_history']['order_by_amount'] = 'Ταξινόμηση κατά ποσό';
$lng['order_history']['order_by_processor'] = 'Ταξινόμηση κατά επεξεργαστή';
$lng['order_history']['description'] = 'Περιγραφή';
$lng['order_history']['newad'] = 'Nέα αγγελία'; 
$lng['order_history']['renew'] = 'Ενημέρωση'; 
$lng['order_history']['featured'] = 'Χαρακτηριτικά αγγελιών'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ταξινόμηση κατά ημερομηνία';
$lng['order']['price'] = 'Ταξινόμηση κατά τιμή';
$lng['order']['title'] = 'Ταξινόμηση κατά τίτλο';
$lng['order']['desc'] = 'Φθίνουσα';
$lng['order']['asc'] = 'Αύξουσα';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Πρότεινε αγγελία';
$lng['recommend']['your_name'] = 'Το όνομά σας';
$lng['recommend']['your_email'] = 'Το e-mail σας';
$lng['recommend']['friend_name'] = 'Όνομα φίλου';
$lng['recommend']['friend_email'] = 'E-mail φίλου';
$lng['recommend']['message'] = 'Mήνυμα για το φίλο σας';


$lng['recommend']['error']['your_name_missing'] = 'Εισάγετε το ονομά σας!';
$lng['recommend']['error']['your_email_missing'] = 'Εισάγετε το e-mail σας!';
$lng['recommend']['error']['friend_name_missing'] = 'Εισάγετε το όνομα του φίλου σας!';
$lng['recommend']['error']['friend_email_missing'] = 'Εισάγετε το e-mail του φίλου σας!';
$lng['recommend']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail';


// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Aγγελίες';
$lng['stats']['general'] = 'Γενικά';


// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Εγγραφή';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Κατάσταση';
$lng['general']['favourites'] = 'ΑΓΑΠΗΜΕΝΑ';
$lng['general']['as'] = 'ως';
$lng['general']['view'] = 'Προβλήθει';
$lng['general']['none'] = 'Κανένα';
$lng['general']['yes'] = 'ναι';
$lng['general']['no'] = 'όχι';
$lng['general']['next'] = 'Επόμενο';
$lng['general']['finish'] = 'Τέλος';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Αφαίρεση';
$lng['general']['previous_page'] = 'Προηγούμενη σελίδα';
$lng['general']['next_page'] = 'Επόμενη σελίδα';
$lng['general']['items'] = 'auto';
$lng['general']['active'] = 'Ενεργό';
$lng['general']['inactive'] = 'Ανενεργό';
$lng['general']['expires'] = 'Λήγει στις';
$lng['general']['available'] = 'Διαθέσιμο';
$lng['general']['cancel'] = 'Κατάργηση';
$lng['general']['never'] = 'Ποτέ';
$lng['general']['asc'] = 'Αύξουσα';
$lng['general']['desc'] = 'Φθίνουσα';
$lng['general']['pending'] = 'Σε αναμονή';
$lng['general']['upload'] = 'upload';
$lng['general']['processing'] = 'Υπό επεξεργασία, παρακαλώ περιμένετε ... ';
$lng['general']['help'] = 'Βοήθεια';
$lng['general']['hide'] = 'Κρύψε';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Αυτή είναι μια έκδοση με περιορισμούς. Δεν επιτρέπεται η μετατροπή κάποιων ρυθμίσεων!';
$lng['general']['check_all'] = 'Επιλογή όλων';
$lng['general']['uncheck_all'] = 'Αποεπιλογή όλων';
$lng['general']['all'] = 'Όλες';
$lng['general']['Featurde_Property']='Επιλεγμένα ακίνητα';
// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Οργανισμός Σελίδα';
$lng['users']['store_banner'] = 'Banner σελίδας μεταπωλητή';
$lng['users']['waiting_mail_activation'] = 'Σε αναμονή ενεργοποίησης e-mail.';
$lng['users']['waiting_admin_activation'] = 'Σε αναμονή έγκρισης.';
$lng['users']['no_such_id'] = 'Αυτός ο χρήστης δεν υπάρχει.';

$lng['users']['info']['store_banner'] = 'Η εικόνα που θα χρησιμοποιηθεί ως εικόνα στο επάνω μέρος της σελίδας μεταπωλητή.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Αναφορά προσβλητικής αγγελίας';
$lng['listings']['report_reason'] = 'Αναφορά προβλήματος';
$lng['listings']['meta_info'] = 'Meta πληροφορίες';
$lng['listings']['meta_keywords'] = 'Meta Keywords';
$lng['listings']['meta_description'] = 'Meta Περιγραφή';
$lng['listings']['not_approved'] = 'Δεν εγκρίθηκε';
$lng['listings']['approve'] = 'Εκρίθηκε';
$lng['listings']['choose_payment_method'] = 'Επιλογή της μεθόδου πληρωμής';

$lng['listings']['choose_category'] = 'Επιλέξτε κατηγορία';
$lng['listings']['choose_plan'] = 'Επιλέξτε το πακέτο';
$lng['listings']['enter_ad_details'] = 'Εισαγωγή των λεπτομερειών της αγγελίας';
$lng['listings']['ad_details'] = 'Λεπτομέρειες εισαγωγής';
$lng['listings']['add_photos'] = 'Προσθήκη εικόνων';
$lng['listings']['ad_photos'] = 'Εικόνες αγγελίας';
$lng['listings']['edit_photos'] = 'Μετατροπή φωτογραφίας';
$lng['listings']['extra_options'] = 'Εxtra επιλογές';
$lng['listings']['review'] = 'Ξαναδείτε αγγελία';
$lng['listings']['finish'] = 'Τέλος';
$lng['listings']['next_step'] = 'Επόμενο βήμα;';
$lng['listings']['included'] = 'Συμπεριλαμβανόμενο';
$lng['listings']['finalize'] = 'Ολοκλήρωσε';
$lng['listings']['zip'] = 'Τ.Κ';
$lng['listings']['add_to_favourites'] = 'Προσθήκη στα αγαπημένα';
$lng['listings']['confirm_add_to_fav'] = 'Προσοχή! Δεν πραγματοποιήσατε εισαγωγή! Η προσθήκη στα αγαπημένα θα είναι προσωρινή!';
$lng['listings']['add_to_fav_done'] = 'Η αγγελία εισήχθει στον κατάλογο των αγαπημένων σας!';
$lng['listings']['confirm_delete_favourite'] = 'Είστε βέβαιος πως θέλετε να σβήσετε αυτή την αγαπημένη αγγελία;';
$lng['listings']['no_favourites'] = 'Αγαπημένες αγγελίες';
$lng['listings']['extra_options'] = 'Επιπλέον επιλογές';
$lng['listings']['highlited'] = 'Υπογραμμισμένα';
$lng['listings']['priority'] = 'Προτεραιότητα';
$lng['listings']['video'] = 'Αγγλίες video';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Video σε αναμονή';
$lng['listings']['video_code'] = 'Σύνδεσμο βίντεο στο YouTube';
$lng['listings']['total'] = 'Ολικό';
$lng['listings']['approve_ad'] = 'Έγκριση αγγελίας';
$lng['listings']['finalize_later'] = 'Ολοκληρώστε μετά';
$lng['listings']['click_to_upload'] = 'Κλικάρετε για upload';
$lng['listings']['files_uploaded'] = ' Ολικές φωτογραφίες σε upload';
$lng['listings']['extraphoto'] = ' Κάντε κλικ στη φωτογραφική μηχανή για να επιλέξετε τις φωτογραφίες ';
$lng['listings']['allowed'] = ' επιτρεπόμενες φωτογραφίες!';
$lng['listings']['limit_reached'] = 'Οριο φωτογραφιών πλήρες!';
$lng['listings']['edit_options'] = 'Mετατροπή επιλογών';
$lng['listings']['view_store'] = 'Δείτε σελίδα μεταπωλητή';
$lng['listings']['edit_ad_options'] = 'Mετατροπή επιλογών αγγελίας';
$lng['listings']['no_extra_options_selected'] = 'Καμία επιλεγμένη επιλογή extra!';
$lng['listings']['highlited_listings'] = 'Προβαλόμενες αγγελίες';
$lng['listings']['for_listing'] = 'για την αγγελία αρ. ';
$lng['listings']['expires_on'] = 'Λήγει στις';
$lng['listings']['expired_on'] = 'Έληξε';
$lng['listings']['pending_ad'] = 'Αγγελίες σε αναμονή';
$lng['listings']['pending_highlited'] = 'Υπογραμμισμένες σε αναμονή';
$lng['listings']['pending_featured'] = 'Πρώτη σελίδα σε αναμονή';
$lng['listings']['pending_priority'] = 'Προτεραιότητα σε αναμονή';
$lng['listings']['enter_coupon'] = 'Εισάγετε τον κωδικό κουπονιού';
$lng['listings']['discount'] = 'Έκπτωση';
$lng['listings']['select_plan'] = 'Επιλογή πακέτου';
$lng['listings']['pending_subscription'] = 'Σε αναμονή για την συνδρομή';
$lng['listings']['remove_favourite'] = 'Αφαίρεση από τα αγαπημένα';

$lng['listings']['order_up'] = 'Παραγγελία επάνω';
$lng['listings']['order_down'] = 'Παραγγελία κάτω';

$lng['listings']['errors']['invalid_youtube_video'] = 'Μη έγκυρο Video Youtube!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Εγγραφή';
$lng['useraccount']['no_package'] = 'Κανένα πακέτο αγγελιών';
$lng['useraccount']['packages'] = 'Πακέτα';
$lng['useraccount']['date_start'] = 'Ημερομηνία έναρξης';
$lng['useraccount']['date_end'] = 'Ημεομηνία λήξης';
$lng['useraccount']['remaining_ads'] = 'Εναπομένουσες αγγελίες';
$lng['useraccount']['account_type'] = 'Τύπος λογαριασμού';
$lng['useraccount']['unfinished_listings'] = 'Ατελείς αγγελίες';
$lng['useraccount']['confirm_delete_subscription'] = 'Είστε σίγουροι ότι θέλετε να αφαιρέσετε αυτή την συνδρομή;?';
$lng['useraccount']['buy_store'] = 'Aγορά καταστήματος';
$lng['useraccount']['bulk_uploads'] = 'Χύμα uploads';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Συνδρομή';
$lng['packages']['ads'] = 'Aγγελίες';
$lng['packages']['name'] = 'Όνομα';
$lng['packages']['details'] = 'Λεπτομέρειες';
$lng['packages']['no_ads'] = 'Αριθμός αγγελιών';
$lng['packages']['subscription_time'] = 'Χρόνος συνδρομής';
$lng['packages']['no_pictures'] = 'Επιτρεπόμενες εικόνες';
$lng['packages']['no_words'] = 'Αριθμός λέξεων';
$lng['packages']['ads_availability'] = 'Διαθέσιμες αγγελίες';
$lng['packages']['featured'] = 'Πρώτη σελίδα';
$lng['packages']['highlited'] = 'Υπογραμμισμένες';
$lng['packages']['priority'] = 'Προτεραιότητα';
$lng['packages']['video'] = 'Αγγελίες video';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Συνδρομή';
$lng['order_history']['post_listing'] = 'Post Aγγελιών';
$lng['order_history']['renew_listing'] = 'Ενημερωμένες αγγελίες';
$lng['order_history']['feature_listing'] = 'Αγγελίες ππρώτης σελίδας';
$lng['order_history']['subscribe_to_package'] = 'Συνδρομή πακέτου';
$lng['order_history']['complete_payment'] = 'Ολοκλήρωση πληρωμών';
$lng['order_history']['complete_payment_for'] = 'Ολοκλήρωση πληρωμών για';
$lng['order_history']['details'] = 'Λεπτομέρειες';
$lng['order_history']['subscription_no'] = 'Α. συνδρομών';
$lng['order_history']['highlited'] = 'Υπογραμμισμένες αγγελίες';
$lng['order_history']['priority'] = 'Προτεραιότητα';
$lng['order_history']['video'] = 'Aγγελίες video';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Επιλογή πακέτου!';
$lng['buy_package']['error']['choose_processor'] = 'Επιλέξτε ένα τύπο πληρωμής!';
$lng['buy_package']['error']['invalid_processor'] = 'Μη έγκυρη επεξεργασία των πληρωμών!';
$lng['buy_package']['error']['invalid_package'] = 'Μη έγκυρο πακέτο!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή PayPal!';
$lng['2co']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή 2co!';
$lng['moneybookers']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή moneybookers!';
$lng['authorize']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή authorize!';
$lng['manual']['invalid_transaction'] = 'Μη έγκυρη συναλλαγή!';

$lng['paypal']['transaction_canceled'] = 'Ακύρωση συναλλαγής Paypal!';
$lng['2co']['transaction_canceled'] = 'Ακύρωση συναλλαγής 2co!';
$lng['moneybookers']['transaction_canceled'] = 'Ακύρωση συναλλαγής moneybookers!';
$lng['authorize']['transaction_canceled'] = 'Ακύρωση συναλλαγής authorize!';
$lng['manual']['transaction_canceled'] = 'Ακύρωση συναλλαγής!';
$lng['epay']['transaction_canceled'] = 'Ακύρωση συναλλαγής epay!';

$lng['payments']['transaction_already_processed'] = 'Η διαδικασία έχει είδη πραγματοποιηθεί!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Έγκριση συνδρομής';
$lng['subscribe']['payment_method'] = 'Τρόπος πληρωμής';
$lng['subscribe']['renew_subscription'] = 'Ανανέωση συνδρομής';


// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Αντίγραφο e-mail: ';
$lng['bcc_mails']['from'] = 'Από: ';
$lng['bcc_mails']['to'] = 'προς: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Κατάσταση ομαδικής φόρτωσης: ';
$lng['ie']['successfully'] = '[Επιτυχία προσθήκης αγγελίας';
$lng['ie']['failed'] = 'Fallito';
$lng['ie']['uploaded_listings'] = 'Φορτωμένες αγγελίες:';
$lng['ie']['errors']['upload_import_file'] = 'Παρακαλείστε να φορτώσετε τον αρχείο εισαγωγής από!';
$lng['ie']['errors']['incorrect_file_type'] = 'λανθασμένος τύπος αρχείου! Ο τύπος αρχείου θα πρέπει να είναι: ';
$lng['ie']['errors']['could_not_open_file'] = 'Αδυναμία ανοίγματος του αρχείου!';
$lng['ie']['errors']['choose_categ'] = 'Επιλέξτε μια κατηγορία!';
$lng['ie']['errors']['could_not_save_file'] = 'αδυναμία φόρτωσης αρχείου: ';
$lng['ie']['errors']['required_field_missing'] = 'Λείπουν υποχρεωτικά πεδία: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Εσφαλμένος αρισθμός στοιχείων: ';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Επιλέξτε πωλητή';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Περιοχή αναζήτησης';
$lng['areasearch']['all_locations'] = 'Όλες οι τοποθεσίες';
$lng['areasearch']['exact_location'] = 'Σωστή θέση';
$lng['areasearch']['around'] = 'γύρω';


// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ναι';
$lng['general']['No'] = 'Όχι';
$lng['general']['or'] = 'ή';
$lng['general']['in'] = 'σε';
$lng['general']['by'] = 'από';
$lng['general']['close_window'] = 'Κλείστε το παράθυρο';
$lng['general']['more_options'] = 'Περισσότερες επιλογές';
$lng['general']['less_options'] = 'Λιγότερες επιλογές';
$lng['general']['send'] = 'Αποστολή';
$lng['general']['save'] = 'Αποθήκευση';
$lng['general']['for'] = 'για';
$lng['general']['to'] = 'στην';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Σηματοδοτήστε το σαν νοίκι';
$lng['listings']['mark_unrented'] = 'Αποεπιλέξτε το από νοίκι';
$lng['listings']['rented'] = 'Νοικιασμένο';
$lng['listings']['your_info'] = 'Οι πληροφορίες σας';
$lng['listings']['email'] = 'Το e-mail σας';
$lng['listings']['name'] = 'Το όνομά σας';
$lng['listings']['listing_deleted'] = 'Η αγγελία σας σβήστηκε!';
$lng['listings']['post_without_login'] = 'Δώστε σχόλιο χωρίς εγγραφή';
$lng['listings']['waiting_activation'] = 'Αναμονή για την εγγραφή';
$lng['listings']['waiting_admin_approval'] = 'Σε αναμονή για έγκριση διαχειριστή';
$lng['listings']['dont_need_account'] = 'Δεν είναι αναγκαίος ένας λογαριασμός! Εισάγετε την αγγελία σας χωρίς να πραγματοποιήσετε την είσοδο στο σύστημα!';
$lng['listings']['post_your_ad'] = 'Pubblica il tuo annuncio!';
$lng['listings']['posted'] = 'Απεστάλλει';
$lng['listings']['select_subscription'] = 'Επιλογή πακέτου';
$lng['listings']['choose_subscription'] = 'Επιλογή πακέτου';
$lng['listings']['inactive_listings'] = 'Μη ενεργή αγγελία';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Περισσότερα φίλτρα αναζήτησης';
$lng['search']['refine_by_keyword'] = 'Φίλτρα για τις λέξεις κλειδιά';
$lng['search']['showing'] = 'Αποτελέσματα';
$lng['search']['more'] = 'Περισσότερα';
$lng['search']['less'] = 'Λιγότερα';
$lng['search']['search_for'] = 'Αναζήτηση για';
$lng['search']['save_your_search'] = 'Αποθήκευση αναζήτησης';
$lng['search']['save'] = 'Αποθήκευση';
$lng['search']['search_saved'] = 'Η αναζήτησή σας αποθηκεύθηκε!';
$lng['search']['must_login_to_save_search'] = 'Αναγκαία η πρόσβαση στο λογαριασμό σας για την αποθήκευση της έρευνας!';
$lng['search']['view_search'] = 'Προβολή έρευνας';
$lng['search']['all_categories'] = 'Όλες οι κατηγορίες';
$lng['search']['more_than'] = 'περισσότερο απο';
$lng['search']['less_than'] = 'λιγότερο από';

$lng['search']['error']['cannot_save_empty_search'] = 'Η αναζήτησή σας δεν εμπεριέχει όρους ώστε να καθίσταται δυνατή η αποθηκευσή της!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Αποθηκευμένες αναζητήσεις';
$lng['useraccount']['view_saved_searches'] = 'Δείτε αποθηκευμένες αναζητήσεις';
$lng['useraccount']['no_saved_searches'] = 'Καμία αναζήτηση δεν αποθηκεύθηκε';
$lng['useraccount']['recurring'] = 'recurring';
$lng['useraccount']['date_renew'] = 'Ημερομηνία ανανέωσης';
$lng['useraccount']['logged_in_as'] = 'Κάνατε εισαγωγή ως';
$lng['useraccount']['subscriptions'] = 'Εγγραφές';

$lng['users']['activate_account'] = 'Ενεργοποίηση λογαριασμού';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Προσθήκη συνδρομής';
$lng['subscriptions']['package'] = 'Συνδρομή';
$lng['subscriptions']['remaining_ads'] = 'Εναπομείναντες αγγελίες';
$lng['subscriptions']['recurring'] = 'recurring';
$lng['subscriptions']['date_start'] = 'Ημερομηνία έναρξης';
$lng['subscriptions']['date_end'] = 'Ημερομηνία λήξης';
$lng['subscriptions']['date_renew'] = 'Ημερομηνία ανανέωσης';
$lng['subscriptions']['confirm_delete'] = 'Είστε σίγουροι ότι θέλετε να ακυρώσετε την συνδρομή;';
$lng['subscriptions']['no_subscriptions'] = 'Καμία εγγραφή';


// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Δεν έχετε λογαριασμό;';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Ενεργοποίηση πληρωμών για την εγγραφή';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Τα ακόλουθα υποχρεωτικά πεδία λείπουν: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Αγοράστε σελίδα πωλητή';


$lng['images']['errors']['max_photos'] = 'Upload max foto!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Ειδοποίηση e-mail';
$lng['alerts']['email_alerts'] = 'Ειδοποίηση e-mail';
$lng['alerts']['no_alerts'] = 'Καμία ειδοποίηση e-mail';
$lng['alerts']['view_email_alerts'] = 'Προβολή των ειδοποιήσεων e-mail';
$lng['alerts']['send_email_alerts'] = 'Αποστολή ειδοποιήσεων e-mail';
$lng['alerts']['immediately'] = 'Άμεσα';
$lng['alerts']['daily'] = 'Αυθημερόν';
$lng['alerts']['weekly'] = 'Εβδομαδιαία';
$lng['alerts']['your_email'] = 'Η διεύθυνση e-mail σας';
$lng['alerts']['create_alert'] = 'Δημιουργία προειδοποίησης';
$lng['alerts']['email_alert_info'] = 'Θα λάβετε ειδοποιήσεις στο e-mail σας, σχετικά με την αναζήτηση που κάνατε.';
$lng['alerts']['alert_added'] = 'Η ειδοποίησή σας καταχωρήθηκε!';
$lng['alerts']['alert_added_activate'] = 'Θα σας αποσταλεί ένα e-mail στην διεύθυνση <b>::EMAIL::</b>. Ακολουθήστ ετι ςοδηγίες για να ενεργοποιήσετε την υπηρεσία Προειδοποίησης'; // Non eliminare ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Αναζήτηση σε';
$lng['alerts']['keyword'] = 'λέξεις κλειδιά';
$lng['alerts']['frequency'] = 'Συχνότητα προειδοποιήσεων';
$lng['alerts']['alert_activated'] = 'Η προειδοποίησή σας σας ενεργοποιήθηκε! Θα βρούμ ετο γρηγορότερο ότι ψάχνετε.';
$lng['alerts']['alert_unsubscribed'] = 'La tua segnalazione  stata eliminata!';
$lng['alerts']['started_on'] = 'έναρξη στις';
$lng['alerts']['no_terms_searched'] = 'Δεν υπάρχουν όροι σε αυτή την κατηγορία!';
$lng['alerts']['no_listings'] = 'Καμία αγγελία για αυτή την προειδοποίηση!';

$lng['alerts']['error']['email_required'] = 'Εισάγετε την διεύθυνση e-mail για αυτή την προειδοποίηση!';
$lng['alerts']['error']['invalid_email'] = 'Μη έγκυρη διεύθυνση e-mail!';
$lng['alerts']['error']['invalid_frequency'] = 'Μη έγκυρη συχνότητα alert!';
$lng['alerts']['error']['login_required'] = 'Παραγαλείστε να <a href="::LINK::">πραγματοποιήσετε πρόσβαση</a> γι αν αλάβετε τις προειδοποιήσεις!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Παρακαλείστε να επιλέξετε τουλάχιστον ένα κλειδί έρευνας με εξαίρεση την κατηγορία!';
$lng['alerts']['error']['invalid_confirmation'] = 'Μη έγκυρη επιβεβαίωση προειδοποίησης!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Μη έγκυρη αίτηση ακύρωσης συνδρομής!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Υπολογισμός δανείου';
$lng_loancalc['sale_price'] = 'Τιμή πώλησης';
$lng_loancalc['down_payment'] = 'Προκαταβολή';
$lng_loancalc['trade_in_value'] = 'Ανταλλαγές σε ονομαστικούς όρους';
$lng_loancalc['loan_amount'] = 'Ποσό δανείου';
$lng_loancalc['sales_tax'] = 'Φόρος πώλησης';
$lng_loancalc['interest_rate'] = 'Τόκοι';
$lng_loancalc['loan_term'] = 'Δάνειο μεγάλης διάρκειας';
$lng_loancalc['months'] = 'Mήνας';
$lng_loancalc['years'] = 'έτος';
$lng_loancalc['or'] = '0';
$lng_loancalc['monthly_payment'] = 'Μηνιαία πληρωμή';
$lng_loancalc['calculate'] = 'Υπολογισμός';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Σχόλια';
$lng_comments['make_a_comment'] = 'Προσθέστε ένα σχόλιο';
$lng_comments['login_to_post'] = 'Παρακαλείστε να <a href="::LOGIN_LINK::">εισέλθετε στο σύστημα </a> για να αφήσετε ένα σχόλιο.';

$lng_comments['name'] = 'Όνομα';
$lng_comments['email'] = 'E-mail';
$lng_comments['website'] = 'Ιστοσελίδα';
$lng_comments['submit_comment'] = 'Δημοσιεύεστε το σχόλιο';

$lng_comments['error']['name_missing'] = 'Εισάγετε το όνομά σας!';
$lng_comments['error']['content_missing'] = 'Εισάγετε το σχολιό σας!';
$lng_comments['error']['website_missing'] = 'Εισάγετε την ιστοσελίδα σας!';
$lng_comments['error']['email_missing'] = 'Εισάγετε το e-mail σας!';
$lng_comments['error']['listing_id_missing'] = 'Μη έγκυρο σχόλιο!';

$lng_comments['error']['invalid_email'] = 'Μη έγκυρο e-mail!';
$lng_comments['error']['invalid_website'] = 'Μη έγκυρη διεύθυνση ιστοσελίδας!';
$lng_comments['errors']['badwords'] = 'Το σχολιό σου περιέχει υβριστικές λέξεις! Άλλαξε το σχολιό σου και μην γίνεσαι μαλάκας!';

$lng_comments['info']['comment_added'] = 'Το σχολιό σας προστέθηκε! Πατήστε <a id="newad">εδώ</a> αν επιθυμείτε να προσθέσετε ένα άλλο σχόλιο.';
$lng_comments['info']['comment_pending'] = 'Το σχόλιό σας βρίσκεται σε αναμονή επιβεβαίωσης.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Επόμενη;';
$lng['tb']['prev'] = 'Προηγούμενη';
$lng['tb']['close'] = 'Κλείσε';
$lng['tb']['or_esc'] = 'ή ESC Key';

// ------------------- end vers 6.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Choose location';
$lng['location']['choose'] = 'Choose';
$lng['location']['change'] = 'Change';
$lng['location']['all_locations'] = 'All locations';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Κατηγορία';
$lng['location']['save_location'] = 'Save location';

$lng['credits']['credits'] = 'Credits';
$lng['credits']['credit'] = 'Credit';
$lng['credits']['pending_credits'] = 'Pending credits';
$lng['credits']['current_credits'] = 'Current credits';
$lng['credits']['one_credit_equals'] = 'One credit equals';
$lng['credits']['credits_amount'] = 'Credits amount';
$lng['credits']['buy_extra_credits'] = 'Buy extra credits';
$lng['credits']['credits_package'] = 'Credits package';
$lng['credits']['select_package'] = 'Select credits package';
$lng['credits']['choose_package'] = 'Choose package';
$lng['credits']['you_currently_have'] = 'You currently have ';
$lng['credits']['you_currently_have_no_credits'] = 'You currently have no credits ';
$lng['credits']['pay_using_credits'] = 'Pay using credits';
$lng['credits']['not_enough_credits'] = 'Not enough credits for this payment!';
$lng['credits']['scredits'] = 'credits';
$lng['credits']['scredit'] = 'credit';



$lng['order_history']['credits_purchase'] = 'Credits purchase';
$lng['order_history']['invalid_order'] = 'Invalid order!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Παρακαλώ περιμένετε ενώ είστε ανακατευθυνόμενοι!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Σας παρακαλούμε <a href="::LOGIN_LINK::">Συνδεθείτε</a> ώστε να μπορείτε να δείτε τα στοιχεία επικοινωνίας!';
$lng['listing']['no_contact_information'] = 'Δεν υπάρχουν διαθέσιμα στοιχεία επικοινωνίας.';
$lng['navbar']['register_as'] = 'Εγγραφείτε ως';
$lng['listings']['all_ads'] = 'Όλες οι διαφημίσεις';
$lng['listings']['refine'] = 'Εκκαθαρίζω';
$lng['listings']['results'] = 'Αποτελέσματα';
$lng['listings']['photos'] = 'φωτογραφίες';
$lng['listings']['user_details'] = 'Δείτε λεπτομέρειες χρήστη';
$lng['listings']['back_to_details'] = 'Επιστροφή στις λεπτομέρειες της καταχώρισης';
$lng['listings']['post_free_ad'] = 'Δημοσίευση δωρεάν διαφήμισης';
$lng['users']['username_available'] = 'Το όνομα χρήστη είναι διαθέσιμο!';
$lng['users']['username_not_available'] = 'Ονομα χρήστη μη διαθέσιμο!';
$lng['general']['not_found'] = 'Η ζητούμενη σελίδα δεν βρέθηκε!';
$lng['general']['full_version'] = 'Πλήρη έκδοση';
$lng['general']['mobile_version'] = 'Έκδοση για κινητά';
$lng['failed'] = 'Απέτυχε';
$lng['remember_me'] = 'Θυμήσου με';
$lng['less_than_a_minute'] = 'λιγότερο από ένα λεπτό πριν';
$lng['minute'] = 'λεπτό';
$lng['minutes'] = 'λεπτά';
$lng['hour'] = 'ώρα';
$lng['hours'] = 'ώρες';
$lng['yesterday'] = 'Εχθές';
$lng['day'] = 'ημέρα';
$lng['days'] = 'ημέρες';
$lng['ago_postfix'] = ' πριν';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Σήμερα';
$lng['messages']['confirm_delete'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το μήνυμα;';
$lng['listings']['change_category'] = 'Αλλαγή κατηγορίας';
$lng['listings']['change_plan'] = 'Επιλέξτε ένα διαφορετικό σχέδιο';
$lng['listings']['choose_active_subscription'] = 'Επιλέξτε από τις ενεργές συνδρομές σας';
$lng['useraccount']['request_removal'] = 'Αίτημα κατάργησης λογαριασμού';
$lng['useraccount']['request_removal_now'] = 'Αίτηση αφαίρεσης τώρα!';
$lng['useraccount']['removal_verification_sent'] = 'Θα λάβετε ένα μήνυμα ηλεκτρονικού ταχυδρομείου που περιέχει έναν σύνδεσμο επαλήθευσης. Κάντε κλικ στο σύνδεσμο για να επιβεβαιώσετε την αίτηση απομάκρυνσης!';
$lng['contact']['message_waits_admin_aproval'] = 'Το μήνυμά σας θα παραδοθεί αφού εγκριθεί από διαχειριστή!';
$lng['general']['accept'] = 'Αποδέχομαι';
$lng['general']['decline'] = 'Πτώση';
$lng['general']['tax'] = 'φόρος';
$lng['general']['total_with_tax'] = 'Σύνολο με φόρο';
$lng['navbar']['rss'] = 'RSS';
$lng['general']['in_category'] = 'Στην κατηγορία';
$lng['users']['user_info'] = 'Πληροφορίες χρήστη';
$lng['users']['store_info'] = 'Αποθηκεύστε πληροφορίες';
$lng['users']['user_listings'] = 'Όλες οι λίστες';
$lng['login']['errors']['invalid_email_pass'] = 'Λάθος διεύθυνση ηλεκτρονικού ταχυδρομείου ή κωδικός πρόσβασης!';
$lng['general']['or'] = 'ή';
$lng['newad']['choose_a_new_plan'] = 'Επιλέξτε ένα νέο σχέδιο';
$lng['listings']['no_extra_options_available'] = 'Δεν υπάρχουν επιπλέον επιλογές διαθέσιμες!';
$lng['listings']['map'] = 'Χάρτης';
$lng['users']['affiliate'] = 'Υιοθετώ';
$lng['users']['affiliate_id'] = 'Κωδικός θυγατρικών';
$lng['users']['affiliate_link'] = 'Σύνδεσμος θυγατρικών';
$lng['users']['affiliate_paypal_email'] = 'Λογαριασμός PayPal θυγατρικών';
$lng['users']['info']['affiliate_paypal_email'] = 'Θα λάβετε εδώ τα χρήματα που κερδίσατε με το λογαριασμό θυγατρικών σας';
$lng['users']['errors']['affiliate_paypal_email'] = 'Εισαγάγετε τον λογαριασμό σας στο PayPal! Θα λάβετε εδώ τα χρήματα που κερδίσατε με το λογαριασμό θυγατρικών σας';
$lng['listings']['result'] = 'αποτέλεσμα';
$lng['confirm_delete'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το επιλεγμένο στοιχείο;';
$lng['confirm_delete_all'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τα επιλεγμένα στοιχεία;';
$lng['general']['show'] = 'προβολή';
$lng['general']['on_a_page'] = 'σε μια σελίδα';
$lng['general']['return'] = 'ΕΠΙΣΤΡΟΦΗ';
$lng['login']['register_for_free'] = 'Εγγραφείτε δωρεάν!';
$lng['general']['sent'] = 'Απεσταλμένα';
$lng['general']['received'] = 'Λήψη';
$lng['messages']['spam'] = 'Ανεπιθυμητη αλληλογραφια';
$lng['newad']['not_logged_in'] = 'Δεν είσαι συνδεδεμένος!';
$lng['newad']['or_post_without_account'] = 'ή συνεχίστε να αποστέλλετε χωρίς λογαριασμό!';
$lng_comments['scomments'] = 'σχόλια';
$lng_comments['scomment'] = 'σχόλιο';
$lng['general']['on'] = 'επί';
$lng['affiliates']['last_payment'] = 'Τελευταία πληρωμή';
$lng['affiliates']['last_payment_date'] = 'Τελευταία ημερομηνία πληρωμής';
$lng['affiliates']['next_payment_date'] = 'Επόμενη ημερομηνία πληρωμής';
$lng['affiliates']['total_due'] = 'Συνολικά οφειλόμενα';
$lng['affiliates']['total_payments'] = 'Συνολικές πληρωμές';
$lng['affiliates']['revenue_history'] = 'Ιστορικό εσόδων';
$lng['affiliates']['payments_history'] = 'Ιστορικό πληρωμών';
$lng['affiliates']['pending_payment'] = 'Εν αναμονή πληρωμής';
$lng['affiliates']['released'] = 'Κυκλοφόρησε';
$lng['affiliates']['not_released'] = 'Δεν έχει κυκλοφήσει';
$lng['affiliates']['paid'] = 'επί πληρωμή';
$lng['affiliates']['not_paid'] = 'Απληρωτος';
$lng['general']['no_items'] = 'Κανένα αντικείμενο';
$lng['useraccount']['amount_start'] = 'Ποσό από';
$lng['useraccount']['amount_end'] = 'Ανέρχομαι στο ποσό';
$lng['not_allowed_to_post_ads'] = 'Δεν επιτρέπεται να δημοσιεύσετε διαφημίσεις με αυτόν τον λογαριασμό!';

// ------------------- end version 8.01 ------------------
/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Οι αλλαγές που κάνετε θα παραμείνουν εκκρεμείς έως ότου εξεταστούν από διαχειριστή!';
$lng['useraccount']['auction'] = 'Δημοπρασία';
$lng['useraccount']['add_auction'] = 'Προσθήκη δημοπρασίας';
$lng['useraccount']['remove_auction'] = 'Κατάργηση δημοπρασίας';
$lng['useraccount']['auction_start_price'] = 'Τιμή εκκίνησης';
$lng['useraccount']['starts_at'] = 'Αρχίζει στις';
$lng['useraccount']['no_bids'] = 'Δεν υπάρχουν προσφορές';
$lng['useraccount']['max_bid'] = 'Μέγιστη προσφορά';
$lng['useraccount']['enable'] = 'επιτρέπω';
$lng['useraccount']['disable'] = 'Καθιστώ ανίκανο';
$lng['useraccount']['error']['auction_start_price'] = 'Παρακαλούμε εισάγετε τιμή εκκίνησης σε δημοπρασία!';
$lng['useraccount']['info']['auction_added'] = 'Η δημοπρασία προστέθηκε με επιτυχία!';
$lng['useraccount']['confirm_delete'] = 'Επιβεβαιώστε τη διαγραφή ενέργειας;';
$lng['useraccount']['place_bid'] = 'Τοποθετήστε την προσφορά σας!';
$lng['useraccount']['login_to_bid'] = 'Παρακαλούμε συνδεθείτε για να τοποθετήσετε την προσφορά σας!';
$lng['useraccount']['bid'] = 'Προσφορά';
$lng['useraccount']['message_to_seller'] = 'Μήνυμα προς τον πωλητή';
$lng['useraccount']['error']['enter_bid'] = 'Εισαγάγετε την προσφορά σας!';
$lng['useraccount']['error']['incorrect_bid'] = 'Μη έγκυρη προσφορά!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Η προσφορά σας είναι μικρότερη από την τιμή εκκίνησης!';
$lng['useraccount']['bid_placed'] = 'Η προσφορά σας τοποθετήθηκε!';
$lng['useraccount']['placed_on'] = 'Τοποθετημένο';
$lng['useraccount']['no_bids_for_auction'] = 'Δεν υπάρχουν προσφορές για αυτή τη δημοπρασία!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------

$lng['general']['click_to_view'] = 'Κάντε κλικ για προβολή';

$lng['advanced_search']['clear_search'] = 'Καθαρή αναζήτηση';

$lng['listings']['currency'] = 'Νόμισμα';

$lng['listings']['show_phone'] = 'Εμφάνιση τηλεφώνου';

$lng['listings']['make_public'] = 'Δημοσιεύστε το';
$lng['advanced_search']['only_ads_with_auction'] = 'Μόνο διαφημίσεις με δημοπρασίες';
$lng['security']['failed_login_attempts'] = 'Επαναλαμβανόμενες αποτυχημένες προσπάθειες σύνδεσης';

// --------------- end  8.5 --------------------
// ------------------- begin responcible ------------------$lng['general']['responsible'] = 'We are not responsible for the content of advertising';// ------------------- end responcible ------------------
// ---------------  8.7 --------------------

$lng['users']['info']['sms_verification'] = 'Ο λογαριασμός σας είναι ανενεργός! Θα λάβετε σύντομα ένα μήνυμα SMS που περιέχει έναν κωδικό επαλήθευσης. Εισαγάγετε τον κωδικό στο παρακάτω πλαίσιο για να ενεργοποιήσετε το λογαριασμό σας.';

$lng['users']['verification_code'] = 'Κωδικός επαλήθευσης';

$lng['users']['waiting_sms_activation'] = 'Αναμονή για ενεργοποίηση SMS';

$lng['listings']['info']['sms_verification'] = 'Η καταχώρησή σας είναι αυτή τη στιγμή ανενεργή! Θα λάβετε σύντομα ένα μήνυμα SMS που περιέχει έναν κωδικό επαλήθευσης. Εισαγάγετε τον κωδικό στο παρακάτω πλαίσιο για να ενεργοποιήσετε την καταχώρισή σας.';

$lng['listings']['activate_listing'] = 'Ενεργοποίηση καταχώρησης';

$lng['listings']['errors']['sms_invalid_activation'] = 'Μη έγκυρο κλειδί ενεργοποίησης!';

$lng['listings']['info']['listing_pending'] = 'Η καταχώρισή σας εκκρεμεί και περιμένει την επαλήθευση διαχειριστή.';

$lng['listings']['info']['listing_activated'] = 'Η εγγραφή σας είναι ενεργοποιημένη!';

$lng['listings']['errors']['listing_already_active'] = 'Η εγγραφή σας είναι ήδη ενεργή!';

$lng['listings']['errors']['invalid_phone'] = 'Μη έγκυρος αριθμός τηλεφώνου!';



// ---------------  8.7 --------------------
$lng['history_ads']['title'] = 'πρόσφατη ιστορία σας';
//----------------------history -----------
// ---------------  8.10 --------------------

$lng['newad']['available_for'] = 'Διαθέσιμο για';

$lng['newad']['available_until_expires'] = 'Διαθέσιμο μέχρι να λήξει η καταχώριση';

$lng['newad']['view_info'] = 'Προβολή πληροφοριών';

$lng['users']['errors']['phone_not_permitted'] = 'Αυτός ο αριθμός τηλεφώνου δεν επιτρέπεται!';

$lng['invoice']['invoice'] = 'Τιμολόγιο';

$lng['invoice']['invoice_no'] = 'Αριθμός τιμολογίου';

$lng['invoice']['bill_to'] = 'Μιλήστε στο';

$lng['invoice']['qty'] = 'Qty';

$lng['invoice']['unit_price'] = 'Τιμή μονάδας';

$lng['invoice']['subtotal'] = 'ΜΕΡΙΚΟ ΣΥΝΟΛΟ';

$lng['invoice']['sale_tax'] = 'Φόρος πωλήσεων';

$lng['invoice']['new_listing'] = 'Νέα καταχώρηση';

$lng['invoice']['renew_listing'] = 'Ανανέωση διαφήμισης';

$lng['invoice']['featured_eo'] = 'Προτεινόμενη επιπλέον επιλογή για καταχώριση';

$lng['invoice']['highlited_eo'] = 'Επισημαίνεται επιπλέον επιλογή για καταχώριση';

$lng['invoice']['priority_eo'] = 'Προαιρετική επιλογή προτεραιότητας για καταχώριση';

$lng['invoice']['video_eo'] = 'Πρόσθετη επιλογή βίντεο για καταχώριση';

$lng['invoice']['new_credits_pkg'] = 'Νέες αγορές αγοράς πιστώσεων';

$lng['invoice']['store'] = 'Αγορά αγοράς αντιπροσώπου';

$lng['invoice']['new_subscription'] = 'Νέα αγορά συνδρομής';

$lng['invoice']['renew_subscription'] = 'Ανανέωση συνδρομής';

$lng['weeks'] = 'Εβδομάδες';

$lng['week'] = 'Εβδομάδα';

$lng['months'] = 'Μήνες';

$lng['month'] = 'Μήνας';

// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Εμφάνιση του WhatsApp';
$lng['general']['to_top'] = 'Πηγαίνετε στην κορυφή';
$lng['quick_search']['location'] = 'Ταχυδρομικός κώδικας ή τοποθεσία';
$lng['listings']['see_all'] = 'Δείτε όλες τις διαφημίσεις & raquo;';
$lng['listings']['ads'] = 'ads';
$lng['listings']['user_since'] = 'Χρήστη από τότε';
$lng['listings']['contact_details'] = 'Στοιχεία επικοινωνίας';
$lng['listings']['favourite'] = 'Αγαπημένη';
$lng['listings']['manage_ad'] = 'Διαχειριστείτε τη διαφήμισή σας';
$lng['useraccount']['show_bids'] = 'Εμφάνιση προσφορών';
$lng['listings']['report_abusive'] = 'Αναφορά καταχρηστικής διαφήμισης';
$lng['listings']['enable_auction'] = 'Ενεργοποιήστε τη δημοπρασία';
$lng['invoice']['download'] = 'Κατεβάστε το τιμολόγιο';


$lng['register']['group'] = 'Τύπος Λογαριασμού';
$lng['register']['change_group'] = 'Αλλαγή τύπου λογαριασμού';
$lng['register']['select_group'] = 'Επιλέξτε ομάδα';

$lng['search']['private'] = 'Ιδιώτες';
$lng['search']['professional'] = 'Επαγγελματίες';
$lng['search']['save_your_search2'] = 'Θέλετε να αποθηκεύσετε την αναζήτησή σας;';
$lng['search']['save_search'] = 'Αποθήκευση αναζήτησης';
$lng['search']['refine_your_search'] = 'Περιορίστε την αναζήτησή σας';
$lng['search']['hide_refine'] = 'Απόκρυψη';

$lng['listings']['view_all_featured'] = 'Προβολή όλων των χαρακτηριστικών >>';
$lng['listings']['view_all_latest'] = 'Προβολή όλων των πρόσφατων >>';
$lng['listings']['view_all_auctions'] = 'Δείτε όλες τις δημοπρασίες >>';
$lng['listings']['auctions'] = 'Δημοπρασίες';
$lng['listings']['view_ads_from'] = 'Προβολή διαφημίσεων από';
$lng['location']['change_location'] = 'Αλλαγή_τοποθεσίας';
// --------------- end 9.1 --------------------
// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Show email';
$lng['listings']['error']['photo_mandatory'] = 'Please upload at least one picture with your ad!';
// --------------- end 9.2 --------------------

// --------------extra language line-----------
$lng['navbar']['contactmail'] = 'Μπορείτε να συμπληρώσετε τη φόρμα επικοινωνίας ή το ταχυδρομείο προς info@pegasuswings.gr';

$lng['navbar']['contactfooter'] = 'Επικοινωνήστε με το ταχυδρομείο: info@pegasuswings.gr';

$lng['general']['social_media'] = 'Μεσα ΚΟΙΝΩΝΙΚΗΣ ΔΙΚΤΥΩΣΗΣ';

$lng['general']['news'] = 'Νέα';

$lng['general']['youtube'] = 'youtube';
$lng['general']['notification']='Γνωστοποίηση';

$lng['general']['Featurde_Property']='Προτεινόμενες ιδιότητες';
$lng['general']['responsible'] = 'Δεν είμαστε υπεύθυνοι για το περιεχόμενο της διαφήμισης';

$lng['history_ads']['title'] = 'Οι διαφημίσεις που επισκέφτηκαν τελευταία';
$lng['listings']['ad_details_more'] = 'Ακίνητα Περισσότερες λεπτομέρειες';
$lng['users']['username'] = 'Όνομα χρήστη';
//------------------------------------
// --------------- 9.3 --------------------

$lng['listings']['call'] = 'Κλήση';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Τηλέφωνο';
$lng['contact']['error']['phone_or_email_missing'] = 'Πληκτρολογήστε τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας ή τον αριθμό τηλεφώνου σας!';
$lng['general']['at'] = 'στο';
$lng['general']['distance_from'] = 'απόσταση από';
// --------------- end 9.3 --------------------
// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'Το μήνυμα περιέχει απαγορευμένη γλώσσα, παρακαλούμε να το ελέγξετε!';
$lng['listings']['downloading'] = 'Λήψη εικόνων. Παρακαλώ περιμένετε...';
// --------------- end 9.4 --------------------
// --------------- 9.5 --------------------
$lng['ie']['added'] = 'πρόσθεσε';
$lng['users']['repeat'] = 'Επαναλαμβάνω';
$lng['users']['errors']['emails_dont_match'] = 'Οι διευθύνσεις ηλεκτρονικού ταχυδρομείου δεν ταιριάζουν!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Username or Email';
// --------------- end 9.5 --------------------
// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Κάντε κλικ για να συζητήσετε';
$lng['invoice']['price_includes_vat'] = 'Η συνολική τιμή περιλαμβάνει';
$lng['invoice']['vat'] = 'ΔΕΞΑΜΕΝΗ';
$lng['general']['play'] = 'Παίζω';
$lng['second'] = 'δεύτερος';
$lng['seconds'] = 'δευτερολέπτων';
$lng['general']['you_must_wait'] = 'Πρέπει να περιμένεις ';
$lng['general']['before_posting'] = ' πριν δημοσιεύσετε μια νέα λίστα!';
$lng['listings']['select_category'] = '-- Επιλέξτε μία κατηγορία --';


$lng['login']['errors']['account_not_activated'] = 'Your account was not activated. Please use the activation URL you received in your email account.';
$lng['login']['errors']['banned_account'] = 'Ο λογαριασμός σας απαγορεύτηκε!';
$lng['login']['errors']['suspended_account'] = 'Ο λογαριασμός σας έχει τεθεί σε αναστολή μέχρι ';
$lng['general']['back_to_site'] = 'Επιστροφή στον ιστότοπο';
// --------------- end 9.6 --------------------
// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Make ad Urgent';
$lng['order_history']['url'] = 'Website Link';
$lng['listings']['pending_urgent'] = 'Pending Urgent';
$lng['listings']['pending_url'] = 'Pending Website Link';
$lng['listings']['error']['invalid_url'] = 'Invalid Website Link';
$lng['listings']['urgent'] = 'Urgent';
$lng['listings']['url'] = 'Website Link';
$lng['listings']['site_url'] = 'Enter your Website Link';
$lng['listings']['priorities_listings'] = 'Prioritized Listings';
$lng['listings']['urgent_listings'] = 'Urgent Listings';
$lng['listings']['video_listings'] = 'Video Listings';
$lng['listings']['url_listings'] = 'Website Link Listings';
$lng['listings']['view_example'] = 'View example';
// --------------- end 9.7 --------------------
?>

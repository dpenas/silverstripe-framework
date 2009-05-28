<?php

/**
 * Japanese (Japan) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('ja_JP', $lang) && is_array($lang['ja_JP'])) {
	$lang['ja_JP'] = array_merge($lang['en_US'], $lang['ja_JP']);
} else {
	$lang['ja_JP'] = $lang['en_US'];
}

$lang['ja_JP']['AdvancedSearchForm']['ALLWORDS'] = '全ての単語';
$lang['ja_JP']['AdvancedSearchForm']['ATLEAST'] = 'あいまい検索';
$lang['ja_JP']['AdvancedSearchForm']['EXACT'] = '完全に一致する語句';
$lang['ja_JP']['AdvancedSearchForm']['FROM'] = 'から';
$lang['ja_JP']['AdvancedSearchForm']['GO'] = '開始';
$lang['ja_JP']['AdvancedSearchForm']['LASTUPDATED'] = '最近更新されたもの';
$lang['ja_JP']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = '最近更新されたもの';
$lang['ja_JP']['AdvancedSearchForm']['PAGETITLE'] = 'ページ名';
$lang['ja_JP']['AdvancedSearchForm']['RELEVANCE'] = '関連する';
$lang['ja_JP']['AdvancedSearchForm']['SEARCHBY'] = '検索は';
$lang['ja_JP']['AdvancedSearchForm']['SORTBY'] = '結果をソートする';
$lang['ja_JP']['AdvancedSearchForm']['TO'] = 'へ';
$lang['ja_JP']['AdvancedSearchForm']['WITHOUT'] = 'この単語を除いて';
$lang['ja_JP']['BankAccountField']['VALIDATIONJS'] = '有効な口座番号を入れて下さい';
$lang['ja_JP']['BasicAuth']['ENTERINFO'] = 'ユーザー名とパスワードを入力してください';
$lang['ja_JP']['BasicAuth']['ERRORNOTADMIN'] = 'このユーザーは管理者（アドミニストレーター）ではありません';
$lang['ja_JP']['BasicAuth']['ERRORNOTREC'] = 'ユーザー名 / パスワードは認識されませんでした';
$lang['ja_JP']['BBCodeParser']['ALIGNEMENT'] = '整列';
$lang['ja_JP']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = '右寄せ';
$lang['ja_JP']['BBCodeParser']['BOLD'] = 'テキストを強調する';
$lang['ja_JP']['BBCodeParser']['BOLDEXAMPLE'] = '強調';
$lang['ja_JP']['BBCodeParser']['CODE'] = 'コードブロック';
$lang['ja_JP']['BBCodeParser']['CODEDESCRIPTION'] = '未フォーマットのコードブロックです';
$lang['ja_JP']['BBCodeParser']['CODEEXAMPLE'] = 'コードブロック';
$lang['ja_JP']['BBCodeParser']['COLORED'] = 'テキストに色をつける';
$lang['ja_JP']['BBCodeParser']['COLOREDEXAMPLE'] = '青色のテキスト';
$lang['ja_JP']['BBCodeParser']['EMAILLINK'] = 'E-メールリンク';
$lang['ja_JP']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'E-メールアドレスのリンクを作成';
$lang['ja_JP']['BBCodeParser']['IMAGE'] = '画像e';
$lang['ja_JP']['BBCodeParser']['IMAGEDESCRIPTION'] = '投函した画像を閲覧';
$lang['ja_JP']['BBCodeParser']['ITALIC'] = 'テキストを斜体にする';
$lang['ja_JP']['BBCodeParser']['ITALICEXAMPLE'] = '斜体';
$lang['ja_JP']['BBCodeParser']['LINK'] = 'ウェブサイトのリンク';
$lang['ja_JP']['BBCodeParser']['LINKDESCRIPTION'] = '別のウェブサイトかURLにリンクしてください';
$lang['ja_JP']['BBCodeParser']['STRUCK'] = 'テキストに取り消し線を引く';
$lang['ja_JP']['BBCodeParser']['STRUCKEXAMPLE'] = '取り消し線';
$lang['ja_JP']['BBCodeParser']['UNDERLINE'] = 'テキストに下線を引く';
$lang['ja_JP']['BBCodeParser']['UNDERLINEEXAMPLE'] = '下線';
$lang['ja_JP']['BBCodeParser']['UNORDERED'] = '不規則なリストです';
$lang['ja_JP']['BBCodeParser']['UNORDEREDDESCRIPTION'] = '不規則なリストです';
$lang['ja_JP']['BBCodeParser']['UNORDEREDEXAMPLE1'] = '不規則なアイテム 1';
$lang['ja_JP']['BBCodeParser']['UNORDEREDEXAMPLE2'] = '不規則なアイテム 2';
$lang['ja_JP']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'このサイトのパスワードが変更されました。';
$lang['ja_JP']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = '貴方は現在以下の証明書を使ってログインしています:';
$lang['ja_JP']['ChangePasswordEmail.ss']['EMAIL'] = 'メールアドレス';
$lang['ja_JP']['ChangePasswordEmail.ss']['HELLO'] = 'こんにちわ！';
$lang['ja_JP']['ChangePasswordEmail.ss']['PASSWORD'] = 'パスワード';
$lang['ja_JP']['CMSMain']['SAVE'] = '保存';
$lang['ja_JP']['CollectionController_Results.ss']['NEXT'] = '次へ';
$lang['ja_JP']['CollectionController_Results.ss']['PREV'] = '前へ';
$lang['ja_JP']['CollectionController_Results.ss']['RESULTS'] = '結果';
$lang['ja_JP']['ComplexTableField']['CLOSEPOPUP'] = 'ポップアップを閉じる';
$lang['ja_JP']['ComplexTableField.ss']['ADDITEM'] = '%sを追加する';
$lang['ja_JP']['ComplexTableField.ss']['CSVEXPORT'] = 'CSVとしてエクスポート';
$lang['ja_JP']['ComplexTableField.ss']['NOITEMSFOUND'] = 'アイテムがありません';
$lang['ja_JP']['ComplexTableField.ss']['SORTASC'] = '昇順';
$lang['ja_JP']['ComplexTableField.ss']['SORTDESC'] = 'ソート（下順）';
$lang['ja_JP']['ComplexTableField']['SUCCESSADD'] = '作成日時 %s %s %s';
$lang['ja_JP']['ComplexTableField']['SUCCESSEDIT'] = '更新日時 %s %s %s';
$lang['ja_JP']['ComplexTableField_popup.ss']['NEXT'] = '次へ';
$lang['ja_JP']['ComplexTableField_popup.ss']['PREVIOUS'] = '前へ';
$lang['ja_JP']['CompositeDateField']['DAY'] = '日';
$lang['ja_JP']['CompositeDateField']['DAYJS'] = '日';
$lang['ja_JP']['CompositeDateField']['MONTH'] = '月';
$lang['ja_JP']['CompositeDateField']['MONTHJS'] = '月';
$lang['ja_JP']['CompositeDateField']['VALIDATIONJS1'] = '確実にセットしてください';
$lang['ja_JP']['CompositeDateField']['VALIDATIONJS2'] = '正確に';
$lang['ja_JP']['CompositeDateField']['YEARJS'] = '年';
$lang['ja_JP']['ConfirmedFormAction']['CONFIRMATION'] = '上記で送信してよろしいですか？';
$lang['ja_JP']['ConfirmedPasswordField']['ATLEAST'] = 'パスワードには少なくとも %s 文字以上の長さで設定してください';
$lang['ja_JP']['ConfirmedPasswordField']['BETWEEN'] = 'パスワードには %s から %s 文字の長さにしてください';
$lang['ja_JP']['ConfirmedPasswordField']['HAVETOMATCH'] = '入力されたパスワードが一致しました';
$lang['ja_JP']['ConfirmedPasswordField']['LEASTONE'] = 'パスワードには、最低1桁以上の英数字を含んでください';
$lang['ja_JP']['ConfirmedPasswordField']['MAXIMUM'] = 'パスワードには %s 文字までで設定してください';
$lang['ja_JP']['ConfirmedPasswordField']['NOEMPTY'] = 'パスワードに何も入力されていません';
$lang['ja_JP']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'パスワード変更';
$lang['ja_JP']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = '草案かアーカイブされた内容を見るためにはログインしてください。<a href="%s">公開サイトにもどるにはコチラをクリックしてください。</a>';
$lang['ja_JP']['Controller']['FILE'] = 'ファイル';
$lang['ja_JP']['Controller']['IMAGE'] = '画像';
$lang['ja_JP']['CreditCardField']['FIRST'] = '一番目';
$lang['ja_JP']['CreditCardField']['FOURTH'] = '四番目';
$lang['ja_JP']['CreditCardField']['SECOND'] = '二番目';
$lang['ja_JP']['CreditCardField']['THIRD'] = '三番目';
$lang['ja_JP']['CreditCardField']['VALIDATIONJS1'] = '確実に入力してください';
$lang['ja_JP']['CreditCardField']['VALIDATIONJS2'] = 'クレジットカード番号を正確に';
$lang['ja_JP']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['ja_JP']['CurrencyField']['VALIDATIONJS'] = '有効な通貨を入力してください';
$lang['ja_JP']['Date']['AGO'] = '前に';
$lang['ja_JP']['Date']['AWAY'] = ' 向こうへ';
$lang['ja_JP']['Date']['DAY'] = ' 日';
$lang['ja_JP']['Date']['DAYS'] = '日';
$lang['ja_JP']['Date']['HOUR'] = '時';
$lang['ja_JP']['Date']['HOURS'] = '時';
$lang['ja_JP']['Date']['MIN'] = '分';
$lang['ja_JP']['Date']['MINS'] = '分';
$lang['ja_JP']['Date']['MONTH'] = ' 月';
$lang['ja_JP']['Date']['MONTHS'] = ' 月';
$lang['ja_JP']['Date']['SEC'] = '秒';
$lang['ja_JP']['Date']['SECS'] = '秒';
$lang['ja_JP']['Date']['TIMEDIFFAGO'] = '%s 前';
$lang['ja_JP']['Date']['YEAR'] = '年';
$lang['ja_JP']['Date']['YEARS'] = '年';
$lang['ja_JP']['DateField']['NODATESET'] = '日付が入力されていません';
$lang['ja_JP']['DateField']['NOTSET'] = 'セットされていません';
$lang['ja_JP']['DateField']['TODAY'] = '今日';
$lang['ja_JP']['DateField']['VALIDATIONJS'] = '日付値を (DD/MM/YYYY) の形式で入力してください';
$lang['ja_JP']['DateField']['VALIDDATEFORMAT'] = '日付表示形式を入力してください（例:YYYY/MM/DD）';
$lang['ja_JP']['DMYDateField']['VALIDDATEFORMAT'] = '日付値を (DD-MM-YYYY) の形式で入力してください';
$lang['ja_JP']['DropdownField']['CHOOSE'] = '(選択)';
$lang['ja_JP']['EmailField']['VALIDATION'] = 'メールアドレスを入力してください';
$lang['ja_JP']['EmailField']['VALIDATIONJS'] = 'E-メールアドレスを入力して下さい';
$lang['ja_JP']['ErrorPage']['400'] = '400 - 不適格な要求です';
$lang['ja_JP']['ErrorPage']['401'] = '401 - 許可されていません';
$lang['ja_JP']['ErrorPage']['403'] = '403 - 禁止されています';
$lang['ja_JP']['ErrorPage']['404'] = '404 - 見つかりません';
$lang['ja_JP']['ErrorPage']['405'] = '405 - 禁じられた方法です';
$lang['ja_JP']['ErrorPage']['406'] = '406 - 許容できません';
$lang['ja_JP']['ErrorPage']['407'] = '407 - プロキシ認証が必要です';
$lang['ja_JP']['ErrorPage']['408'] = '408 - 応答がありません';
$lang['ja_JP']['ErrorPage']['409'] = '409 - 衝突が生じています';
$lang['ja_JP']['ErrorPage']['410'] = '410 - 消失しました';
$lang['ja_JP']['ErrorPage']['411'] = '411 - 冗長な要求です。';
$lang['ja_JP']['ErrorPage']['412'] = '412 - 前提条件がありません';
$lang['ja_JP']['ErrorPage']['413'] = '413 - リクエストされたものが長すぎます';
$lang['ja_JP']['ErrorPage']['414'] = '414 - リクエストされたURIが長すぎます';
$lang['ja_JP']['ErrorPage']['415'] = '415 - サポートされていないメディアです';
$lang['ja_JP']['ErrorPage']['416'] = '416 - リクエストの長さが満たされていません';
$lang['ja_JP']['ErrorPage']['417'] = '417 - 期待には沿えませんでした';
$lang['ja_JP']['ErrorPage']['500'] = '500 - 本質的なサーバーエラーです';
$lang['ja_JP']['ErrorPage']['501'] = '501 - 実施できません';
$lang['ja_JP']['ErrorPage']['502'] = '502 - Gatewayとして正しくありません';
$lang['ja_JP']['ErrorPage']['503'] = '503 - サービスが利用できません';
$lang['ja_JP']['ErrorPage']['504'] = '504 - Gatewayが時間切れです';
$lang['ja_JP']['ErrorPage']['505'] = '505 - サポートされていないHTTPのバージョンです';
$lang['ja_JP']['ErrorPage']['CODE'] = 'エラーコード';
$lang['ja_JP']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>申し訳ありませんが、貴方の見ようとしているページは存在しません。</p><p>貴方が見ようとしているサイトのURLの綴りがあっているのか、再度確認してください。</p>';
$lang['ja_JP']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'ページが見つかりません';
$lang['ja_JP']['ErrorPage']['PLURALNAME'] = 'エラーページ';
$lang['ja_JP']['ErrorPage']['SINGULARNAME'] = 'エラーページ';
$lang['ja_JP']['File']['Filename'] = 'ファイル名';
$lang['ja_JP']['File']['Name'] = '名前';
$lang['ja_JP']['File']['PLURALNAME'] = 'ファイル';
$lang['ja_JP']['File']['SINGULARNAME'] = 'ファイル';
$lang['ja_JP']['File']['Sort'] = '並び順';
$lang['ja_JP']['File']['Title'] = 'タイトル';
$lang['ja_JP']['File']['TOOLARGE'] = 'ファイル容量が大きすぎます。最大でも%S 以下にしてください。';
$lang['ja_JP']['FileIframeField']['NOTEADDFILES'] = '一度、追加したファイルを保存してください';
$lang['ja_JP']['FileIFrameField']['NOTEADDFILES'] = '一度保存すると、ファイルを追加することが出来ます。';
$lang['ja_JP']['Folder']['PLURALNAME'] = 'ファイル';
$lang['ja_JP']['Folder']['SINGULARNAME'] = 'ファイル';
$lang['ja_JP']['ForgotPasswordEmail.ss']['HELLO'] = 'こんにちわ！';
$lang['ja_JP']['ForgotPasswordEmail.ss']['TEXT1'] = 'ここ\'貴方の';
$lang['ja_JP']['ForgotPasswordEmail.ss']['TEXT2'] = 'パスワードリセットのリンク';
$lang['ja_JP']['ForgotPasswordEmail.ss']['TEXT3'] = 'は';
$lang['ja_JP']['Form']['DATENOTSET'] = '(No date set)';
$lang['ja_JP']['Form']['FIELDISREQUIRED'] = '%s が必要です';
$lang['ja_JP']['Form']['LANGAOTHER'] = 'その他の言語';
$lang['ja_JP']['Form']['LANGAVAIL'] = '利用可能な言語';
$lang['ja_JP']['Form']['NOTSET'] = '(not set)';
$lang['ja_JP']['Form']['SAVECHANGES'] = '変更したデータを保存';
$lang['ja_JP']['Form']['VALIDATIONALLDATEVALUES'] = '全ての日付が入力されていることを確認してください';
$lang['ja_JP']['Form']['VALIDATIONBANKACC'] = '有効な口座番号を入れて下さい';
$lang['ja_JP']['Form']['VALIDATIONCREDITNUMBER'] = 'クレジットカードに書かれた
 %s が含まれた番号を確実にしてください。';
$lang['ja_JP']['Form']['VALIDATIONFAILED'] = '検証できませんでした';
$lang['ja_JP']['Form']['VALIDATIONNOTUNIQUE'] = '入力された値はユニークではありません';
$lang['ja_JP']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'パスワードが一致しません';
$lang['ja_JP']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'パスワードが空欄です';
$lang['ja_JP']['Form']['VALIDATIONSTRONGPASSWORD'] = 'パスワードには、最低1桁以上の英数字を含んでください';
$lang['ja_JP']['Form']['VALIDATOR'] = '検証';
$lang['ja_JP']['Form']['VALIDCURRENCY'] = '有効な通貨を入力してください';
$lang['ja_JP']['FormField']['NONE'] = '何もありません';
$lang['ja_JP']['GhostPage']['NOLINKED'] = 'リンク先が存在していません';
$lang['ja_JP']['Group']['Code'] = 'グループコード';
$lang['ja_JP']['Group']['Description'] = '説明文';
$lang['ja_JP']['Group']['has_many_Permissions'] = '承認';
$lang['ja_JP']['Group']['IPRestrictions'] = 'IPアドレス制限';
$lang['ja_JP']['Group']['Locked'] = 'ロックしますか？';
$lang['ja_JP']['Group']['many_many_Members'] = 'メンバー';
$lang['ja_JP']['Group']['Parent'] = '元グループ';
$lang['ja_JP']['Group']['PLURALNAME'] = 'グループ';
$lang['ja_JP']['Group']['SINGULARNAME'] = 'グループ';
$lang['ja_JP']['Group']['Sort'] = '並び順';
$lang['ja_JP']['GSTNumberField']['VALIDATION'] = '正しいGSTナンバーを入力してください';
$lang['ja_JP']['GSTNumberField']['VALIDATIONJS'] = '有効なGST Numberを入力してください';
$lang['ja_JP']['HtmlEditorField']['ALTTEXT'] = '説明';
$lang['ja_JP']['HtmlEditorField']['ANCHOR'] = 'アンカーの挿入/削除';
$lang['ja_JP']['HtmlEditorField']['ANCHORVALUE'] = 'アンカー';
$lang['ja_JP']['HtmlEditorField']['BULLETLIST'] = 'リスト項目';
$lang['ja_JP']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Align center';
$lang['ja_JP']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = '均等配置';
$lang['ja_JP']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Align left';
$lang['ja_JP']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Align right';
$lang['ja_JP']['HtmlEditorField']['BUTTONBOLD'] = 'Bold (Ctrl+B)';
$lang['ja_JP']['HtmlEditorField']['BUTTONEDITIMAGE'] = '画像を編集';
$lang['ja_JP']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'フラッシュ挿入';
$lang['ja_JP']['HtmlEditorField']['BUTTONINSERTIMAGE'] = '画像挿入';
$lang['ja_JP']['HtmlEditorField']['BUTTONINSERTLINK'] = 'リンクを追加';
$lang['ja_JP']['HtmlEditorField']['BUTTONITALIC'] = 'Italic (Ctrl+I)';
$lang['ja_JP']['HtmlEditorField']['BUTTONREMOVELINK'] = 'リンクを削除';
$lang['ja_JP']['HtmlEditorField']['BUTTONSTRIKE'] = '打ち消し';
$lang['ja_JP']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Underline (Ctrl+U)';
$lang['ja_JP']['HtmlEditorField']['CAPTION'] = 'キャプションを入れる';
$lang['ja_JP']['HtmlEditorField']['CHARMAP'] = 'シンボルを挿入';
$lang['ja_JP']['HtmlEditorField']['CLOSE'] = '閉じる';
$lang['ja_JP']['HtmlEditorField']['COPY'] = 'コピー(Ctrl+C)';
$lang['ja_JP']['HtmlEditorField']['CREATEFOLDER'] = 'フォルダーの作成';
$lang['ja_JP']['HtmlEditorField']['CSSCLASS'] = '調整 / スタイル';
$lang['ja_JP']['HtmlEditorField']['CSSCLASSCENTER'] = '中央はテキストのみ';
$lang['ja_JP']['HtmlEditorField']['CSSCLASSLEFT'] = '左側にテキストと一緒に処理してください';
$lang['ja_JP']['HtmlEditorField']['CSSCLASSLEFTALONE'] = '中央はテキストのみ';
$lang['ja_JP']['HtmlEditorField']['CSSCLASSRIGHT'] = '右側にテキストと一緒に処理してください';
$lang['ja_JP']['HtmlEditorField']['CUT'] = 'カット(Ctrl+X)';
$lang['ja_JP']['HtmlEditorField']['DELETECOL'] = 'コラムを削除';
$lang['ja_JP']['HtmlEditorField']['DELETEROW'] = '列の削除';
$lang['ja_JP']['HtmlEditorField']['EDITCODE'] = 'HTMLコードを編集';
$lang['ja_JP']['HtmlEditorField']['EMAIL'] = 'メールアドレス';
$lang['ja_JP']['HtmlEditorField']['FILE'] = 'ファイル';
$lang['ja_JP']['HtmlEditorField']['FLASH'] = 'flashを挿入';
$lang['ja_JP']['HtmlEditorField']['FOLDER'] = 'フォルダ';
$lang['ja_JP']['HtmlEditorField']['FOLDERCANCEL'] = 'キャンセル';
$lang['ja_JP']['HtmlEditorField']['FORMATADDR'] = '住所';
$lang['ja_JP']['HtmlEditorField']['FORMATH1'] = '見出し 1';
$lang['ja_JP']['HtmlEditorField']['FORMATH2'] = '見出し 2';
$lang['ja_JP']['HtmlEditorField']['FORMATH3'] = '見出し 3';
$lang['ja_JP']['HtmlEditorField']['FORMATH4'] = '見出し 4';
$lang['ja_JP']['HtmlEditorField']['FORMATH5'] = '見出し 5';
$lang['ja_JP']['HtmlEditorField']['FORMATH6'] = '見出し 6';
$lang['ja_JP']['HtmlEditorField']['FORMATP'] = 'パラグラフ';
$lang['ja_JP']['HtmlEditorField']['HR'] = '区切り線を挿入';
$lang['ja_JP']['HtmlEditorField']['IMAGE'] = '画像を挿入';
$lang['ja_JP']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'サイズ';
$lang['ja_JP']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Height';
$lang['ja_JP']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Width';
$lang['ja_JP']['HtmlEditorField']['INDENT'] = '字下げする';
$lang['ja_JP']['HtmlEditorField']['INSERTCOLAFTER'] = '後ろにコラムを挿入';
$lang['ja_JP']['HtmlEditorField']['INSERTCOLBEF'] = '前にコラムを挿入';
$lang['ja_JP']['HtmlEditorField']['INSERTROWAFTER'] = '後に列を挿入';
$lang['ja_JP']['HtmlEditorField']['INSERTROWBEF'] = '前に列を挿入';
$lang['ja_JP']['HtmlEditorField']['INSERTTABLE'] = 'テーブルを挿入';
$lang['ja_JP']['HtmlEditorField']['LINK'] = 'ハイライトテキストへのリンクの挿入/削除';
$lang['ja_JP']['HtmlEditorField']['LINKANCHOR'] = 'このページにアンカーを置く';
$lang['ja_JP']['HtmlEditorField']['LINKDESCR'] = 'リンクの説明';
$lang['ja_JP']['HtmlEditorField']['LINKEMAIL'] = 'メールアドレス';
$lang['ja_JP']['HtmlEditorField']['LINKEXTERNAL'] = '他のウェブサイト';
$lang['ja_JP']['HtmlEditorField']['LINKFILE'] = 'ファイルをダウンロード';
$lang['ja_JP']['HtmlEditorField']['LINKINTERNAL'] = 'サイトのページ';
$lang['ja_JP']['HtmlEditorField']['LINKOPENNEWWIN'] = 'リンクを新しい新規ウインドウで開く';
$lang['ja_JP']['HtmlEditorField']['LINKTEXT'] = 'リンクテキスト';
$lang['ja_JP']['HtmlEditorField']['LINKTO'] = 'リンクする';
$lang['ja_JP']['HtmlEditorField']['OK'] = 'ＯＫ';
$lang['ja_JP']['HtmlEditorField']['OL'] = 'リスト番号';
$lang['ja_JP']['HtmlEditorField']['OUTDENT'] = '字上げする';
$lang['ja_JP']['HtmlEditorField']['PAGE'] = 'ページ';
$lang['ja_JP']['HtmlEditorField']['PASTE'] = 'ペースト(Ctrl+V)';
$lang['ja_JP']['HtmlEditorField']['PASTETEXT'] = 'テキストの貼り付け';
$lang['ja_JP']['HtmlEditorField']['PASTEWORD'] = 'ワードの貼り付け';
$lang['ja_JP']['HtmlEditorField']['REDO'] = '繰り返し(Ctrl+Y)';
$lang['ja_JP']['HtmlEditorField']['SEARCHFILENAME'] = 'ファイル名で検索';
$lang['ja_JP']['HtmlEditorField']['SELECTALL'] = '全選択 (Ctrl+A)';
$lang['ja_JP']['HtmlEditorField']['UNDO'] = 'やり直し(Ctrl+Z)';
$lang['ja_JP']['HtmlEditorField']['UNLINK'] = 'リンクを削除';
$lang['ja_JP']['HtmlEditorField']['UPLOAD'] = 'アップロード';
$lang['ja_JP']['HtmlEditorField']['URL'] = 'URL';
$lang['ja_JP']['HtmlEditorField']['VISUALAID'] = 'ガイドラインの表示/非表示';
$lang['ja_JP']['Image']['PLURALNAME'] = 'ファイル';
$lang['ja_JP']['Image']['SINGULARNAME'] = 'ファイル';
$lang['ja_JP']['ImageField']['NOTEADDIMAGES'] = '最初に保存すれば画像を追加できます';
$lang['ja_JP']['ImageUplaoder']['ONEFROMFILESTORE'] = '貴方のファイルストアからの1つと';
$lang['ja_JP']['ImageUploader']['ATTACH'] = '%s を添付する';
$lang['ja_JP']['ImageUploader']['DELETE'] = '%sを削除';
$lang['ja_JP']['ImageUploader']['FROMCOMPUTER'] = '貴方のファイルストアからの1つで';
$lang['ja_JP']['ImageUploader']['FROMFILESTORE'] = '貴方のファイルストアからの1つで';
$lang['ja_JP']['ImageUploader']['ONEFROMCOMPUTER'] = '貴方のコンピューターからの1つと';
$lang['ja_JP']['ImageUploader']['REALLYDELETE'] = 'この %s を取り除いてよいですか？';
$lang['ja_JP']['ImageUploader']['REPLACE'] = '置き換える %s';
$lang['ja_JP']['Image_iframe.ss']['TITLE'] = 'イメージアップロード（Iframe）';
$lang['ja_JP']['LoginAttempt']['Email'] = 'メールアドレス';
$lang['ja_JP']['LoginAttempt']['IP'] = 'IPアドレス';
$lang['ja_JP']['LoginAttempt']['Status'] = 'ステータス';
$lang['ja_JP']['Member']['ADDRESS'] = '住所';
$lang['ja_JP']['Member']['belongs_many_many_Groups'] = 'グループ';
$lang['ja_JP']['Member']['BUTTONCHANGEPASSWORD'] = 'パスワードの変更';
$lang['ja_JP']['Member']['BUTTONLOGIN'] = 'ログイン';
$lang['ja_JP']['Member']['BUTTONLOGINOTHER'] = '他の誰かとしてログイン';
$lang['ja_JP']['Member']['BUTTONLOSTPASSWORD'] = 'パスワードを紛失';
$lang['ja_JP']['Member']['CONFIRMNEWPASSWORD'] = '新しいパスワードを確認します';
$lang['ja_JP']['Member']['CONFIRMPASSWORD'] = 'パスワード（確認のためもう一度）';
$lang['ja_JP']['Member']['CONTACTINFO'] = '問い合わせ先';
$lang['ja_JP']['Member']['db_LastVisited'] = '最終訪問日';
$lang['ja_JP']['Member']['db_Locale'] = 'インターフェースの言語地域';
$lang['ja_JP']['Member']['db_NumVisit'] = '訪問者数';
$lang['ja_JP']['Member']['db_Password'] = 'パスワード';
$lang['ja_JP']['Member']['EMAIL'] = 'メール';
$lang['ja_JP']['Member']['EMAILPASSWORDAPPENDIX'] = 'パスワードの変更に成功しました！メールに記載された変更内容を大切に保管してください。';
$lang['ja_JP']['Member']['EMAILPASSWORDINTRO'] = '新しいパスワード';
$lang['ja_JP']['Member']['EMAILSIGNUPINTRO1'] = 'メンバー登録ありがとう。詳細は下記をご参照ください';
$lang['ja_JP']['Member']['EMAILSIGNUPINTRO2'] = '以下に記載された証明書を使用することで、ウェブサイトにログインできます';
$lang['ja_JP']['Member']['EMAILSIGNUPSUBJECT'] = '登録ありがとうございました！';
$lang['ja_JP']['Member']['ENTEREMAIL'] = 'パスワードをリセットするためにメールアドレスを入力してください。';
$lang['ja_JP']['Member']['ERRORNEWPASSWORD'] = '新しいパスワードに誤りがあります。もう一度確認してください';
$lang['ja_JP']['Member']['ERRORPASSWORDNOTMATCH'] = '登録されているパスワードと一致しません、もう一度入力し直してください';
$lang['ja_JP']['Member']['ERRORWRONGCRED'] = 'Eメールまたはパスワードが正しくありません、もう一度入力し直してください';
$lang['ja_JP']['Member']['FIRSTNAME'] = '名';
$lang['ja_JP']['Member']['GREETING'] = 'ようこそ！';
$lang['ja_JP']['Member']['INTERFACELANG'] = '画面言語';
$lang['ja_JP']['Member']['LOGGEDINAS'] = '%sでログイン中';
$lang['ja_JP']['Member']['MOBILE'] = 'モバイル';
$lang['ja_JP']['Member']['NAME'] = 'お名前';
$lang['ja_JP']['Member']['NEWPASSWORD'] = '新しいパスワード';
$lang['ja_JP']['Member']['PASSWORD'] = 'パスワード';
$lang['ja_JP']['Member']['PASSWORDCHANGED'] = 'パスワードは変更されました。パスワードのコピーはメールで送信されました。';
$lang['ja_JP']['Member']['PERSONALDETAILS'] = '個人情報';
$lang['ja_JP']['Member']['PHONE'] = '電話番号';
$lang['ja_JP']['Member']['PLURALNAME'] = 'メンバー';
$lang['ja_JP']['Member']['PROFILESAVESUCCESS'] = '保存しました。';
$lang['ja_JP']['Member']['REMEMBERME'] = 'パスワードを記憶？';
$lang['ja_JP']['Member']['SECURITYGROUPS'] = 'セキュリティグループ';
$lang['ja_JP']['Member']['SINGULARNAME'] = 'メンバー';
$lang['ja_JP']['Member']['SUBJECTPASSWORDCHANGED'] = 'パスワードが変わりました。';
$lang['ja_JP']['Member']['SUBJECTPASSWORDRESET'] = 'パスワード再発行';
$lang['ja_JP']['Member']['SURNAME'] = '姓';
$lang['ja_JP']['Member']['USERDETAILS'] = 'ユーザ情報';
$lang['ja_JP']['Member']['VALIDATIONMEMBEREXISTS'] = '入力したメールアドレスは、他のメンバーにすでに使用されています。';
$lang['ja_JP']['Member']['WELCOMEBACK'] = 'おかえりなさい！%sさん';
$lang['ja_JP']['Member']['YOUROLDPASSWORD'] = '古いパスワード';
$lang['ja_JP']['MemberAuthenticator']['TITLE'] = 'メールアドレスとパスワード';
$lang['ja_JP']['MemberPassword']['PLURALNAME'] = 'メンバーパスワード';
$lang['ja_JP']['MemberPassword']['SINGULARNAME'] = 'メンバーパスワード';
$lang['ja_JP']['MyEntity']['MyNamespace'] = 'デフォルトの言語';
$lang['ja_JP']['MyNamespace']['MYENTITY'] = '%s 回目';
$lang['ja_JP']['NumericField']['VALIDATION'] = '\'%s\' は1桁数字ではなく、2桁以上の数字が受付可能です。';
$lang['ja_JP']['NumericField']['VALIDATIONJS'] = '1桁の数字は受け付けられません。2桁以上の数のみここでは受け付けられます。';
$lang['ja_JP']['Page']['SINGULARNAME'] = 'ページ';
$lang['ja_JP']['Permission']['FULLADMINRIGHTS'] = '完全な管理権';
$lang['ja_JP']['Permission']['PERMSDEFINED'] = '以下の許可コードは定義されます';
$lang['ja_JP']['Permission']['PLURALNAME'] = 'アクセス権';
$lang['ja_JP']['Permission']['SINGULARNAME'] = 'アクセス権';
$lang['ja_JP']['PhoneNumberField']['VALIDATION'] = '電話番号を入力してください';
$lang['ja_JP']['RedirectorPage']['HASBEENSETUP'] = '転送URLを含むページには、転送先がない状態で設定されています。';
$lang['ja_JP']['RedirectorPage']['HEADER'] = 'このページをユーザーを変更して他のページにしますか？';
$lang['ja_JP']['RedirectorPage']['OTHERURL'] = '他のウェブサイトのURL';
$lang['ja_JP']['RedirectorPage']['PLURALNAME'] = 'リダイレクト用ページ一覧';
$lang['ja_JP']['RedirectorPage']['REDIRECTTO'] = '変更は';
$lang['ja_JP']['RedirectorPage']['REDIRECTTOEXTERNAL'] = '他のウェブサイト';
$lang['ja_JP']['RedirectorPage']['REDIRECTTOPAGE'] = '貴方のウェブサイトを表示します';
$lang['ja_JP']['RedirectorPage']['SINGULARNAME'] = 'リダイレクト用ページ';
$lang['ja_JP']['RedirectorPage']['YOURPAGE'] = '貴方のウェブサイトを表示します';
$lang['ja_JP']['RelationComplexTableField.ss']['ADD'] = '追加';
$lang['ja_JP']['RelationComplexTableField.ss']['CSVEXPORT'] = 'CSVとしてエクスポート';
$lang['ja_JP']['RelationComplexTableField.ss']['DELETE'] = '削除';
$lang['ja_JP']['RelationComplexTableField.ss']['EDIT'] = '編集';
$lang['ja_JP']['RelationComplexTableField.ss']['NOTFOUND'] = '何もありません';
$lang['ja_JP']['RelationComplexTableField.ss']['SHOW'] = '閲覧';
$lang['ja_JP']['SearchForm']['GO'] = '開始';
$lang['ja_JP']['SearchForm']['SEARCH'] = '検索';
$lang['ja_JP']['Security']['ALREADYLOGGEDIN'] = 'あなたはこのページにアクセスできません。別のアカウントを持っていたら 
下記からログインできます';
$lang['ja_JP']['Security']['BUTTONSEND'] = 'パスワードリセットのリンクを送信してください';
$lang['ja_JP']['Security']['CHANGEPASSWORDBELOW'] = '以下のパスワードを変更できます';
$lang['ja_JP']['Security']['CHANGEPASSWORDHEADER'] = 'パスワードを変更しました';
$lang['ja_JP']['Security']['EMAIL'] = 'E-メール:';
$lang['ja_JP']['Security']['ENCDISABLED1'] = 'パスワードの暗号化ができません！';
$lang['ja_JP']['Security']['ENCDISABLED2'] = 'パスワードを暗号化するには、パスワード設定を変更してください';
$lang['ja_JP']['Security']['ENCDISABLED3'] = '自身のサイトへ/_config.php';
$lang['ja_JP']['Security']['ENCRYPT'] = '全てのパスワードを暗号化します';
$lang['ja_JP']['Security']['ENCRYPTEDMEMBERS'] = 'メンバー向けに暗号化された証明書キー &quot;';
$lang['ja_JP']['Security']['ENCRYPTWITH'] = 'アルゴリズムの &quot;%s&quot; パスワードは暗号化されます';
$lang['ja_JP']['Security']['ENCRYPTWITHOUTSALT'] = 'セキュリティを強化させる為にソルト（皮肉？）を使用しないでください';
$lang['ja_JP']['Security']['ENCRYPTWITHSALT'] = 'ソルト（皮肉？）はセキュリティを強化させます';
$lang['ja_JP']['Security']['ENTERNEWPASSWORD'] = '新しいパスワードを入力してください';
$lang['ja_JP']['Security']['ERRORPASSWORDPERMISSION'] = 'パスワードを変更する為に、ログインしなければなりません！';
$lang['ja_JP']['Security']['ID'] = 'ID:';
$lang['ja_JP']['Security']['LOGGEDOUT'] = 'ログアウトしました。再度ログインする場合は証明書キーを入力してください';
$lang['ja_JP']['Security']['LOGIN'] = 'ログイン';
$lang['ja_JP']['Security']['LOSTPASSWORDHEADER'] = 'パスワードを忘れました';
$lang['ja_JP']['Security']['NOTEPAGESECURED'] = 'このページはセキュリティで保護されております証明書キーを下記に入力してください。こちらからすぐに送信します';
$lang['ja_JP']['Security']['NOTERESETLINKINVALID'] = '<p>パスワードリセット用のリンクが不正です</p><p>あたらしく設定するために <a href="%s">ここ</a> をクリックもしくは <a href="%s">ログイン</a>してパスワードを変更してください。</p>';
$lang['ja_JP']['Security']['NOTERESETPASSWORD'] = 'E-メールアドレスを入力してください、パスワードをリセットするURLを送信致します';
$lang['ja_JP']['Security']['NOTHINGTOENCRYPT1'] = '全く暗号化しないパスワード';
$lang['ja_JP']['Security']['NOTHINGTOENCRYPT2'] = 'メンバーのパスワードは全て暗号化されています。';
$lang['ja_JP']['Security']['PASSWORDSENTHEADER'] = 'パスワードリセットのリンクを送信はこちら \'%s\'';
$lang['ja_JP']['Security']['PASSWORDSENTTEXT'] = 'ありがとうございます！ パスワードリセットのリンクを送信はこちら \'%s\'.';
$lang['ja_JP']['Security']['PERMFAILURE'] = ' このページはセキュリティで保護されており、アクセスするにはアドミニストレーターの権限が必要です 
				証明書キーを下記に入力してください。こちらからすぐに送信します。';
$lang['ja_JP']['SecurityAdmin']['ADVANCEDONLY'] = 'この部分は、上級者向けです。
							詳細は <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">こちらのページ</a>
							を参照してください。';
$lang['ja_JP']['SecurityAdmin']['CODE'] = 'コード';
$lang['ja_JP']['SecurityAdmin']['GROUPNAME'] = 'グループ名';
$lang['ja_JP']['SecurityAdmin']['MEMBERS'] = 'メンバー';
$lang['ja_JP']['SecurityAdmin']['OPTIONALID'] = 'オプショナル ID';
$lang['ja_JP']['SecurityAdmin']['PERMISSIONS'] = '承認';
$lang['ja_JP']['SecurityAdmin']['VIEWUSER'] = 'ユーザー閲覧';
$lang['ja_JP']['SimpleImageField']['NOUPLOAD'] = '何も画像がアップロードされていません';
$lang['ja_JP']['SiteTree']['ACCESSANYONE'] = '誰でも';
$lang['ja_JP']['SiteTree']['ACCESSHEADER'] = '本サイトにあるページを誰か閲覧しますか？';
$lang['ja_JP']['SiteTree']['ACCESSLOGGEDIN'] = 'ログインしたユーザ';
$lang['ja_JP']['SiteTree']['ACCESSONLYTHESE'] = 'この人達だけ (リストから選択してください)';
$lang['ja_JP']['SiteTree']['ADDEDTODRAFT'] = 'ドラフトサイトに追加';
$lang['ja_JP']['SiteTree']['ALLOWCOMMENTS'] = 'コメントを許可しますか？';
$lang['ja_JP']['SiteTree']['APPEARSVIRTUALPAGES'] = 'この内容は、バーチャルページの中の %s セクションに表示されます。';
$lang['ja_JP']['SiteTree']['BUTTONCANCELDRAFT'] = '草稿の編集内容を取り消します';
$lang['ja_JP']['SiteTree']['BUTTONCANCELDRAFTDESC'] = '草稿と前回公開されたページを削除します';
$lang['ja_JP']['SiteTree']['BUTTONSAVEPUBLISH'] = '保存して公開';
$lang['ja_JP']['SiteTree']['BUTTONUNPUBLISH'] = '非公開';
$lang['ja_JP']['SiteTree']['BUTTONUNPUBLISHDESC'] = '公開サイトから取り除きました';
$lang['ja_JP']['SiteTree']['CHANGETO'] = '変更する';
$lang['ja_JP']['SiteTree']['Comments'] = 'コメント';
$lang['ja_JP']['SiteTree']['Content'] = 'コンテンツ';
$lang['ja_JP']['SiteTree']['CURRENT'] = '現在';
$lang['ja_JP']['SiteTree']['CURRENTLY'] = '現在';
$lang['ja_JP']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>あなた自身、自由にページに書き込むことが出来、もちろん添削も自由に行えます。<br /></p>';
$lang['ja_JP']['SiteTree']['DEFAULTABOUTTITLE'] = '私たちについて';
$lang['ja_JP']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>あなた自身、自由にページに書き込むことが出来、もちろん添削も自由に行えます。<br /></p>';
$lang['ja_JP']['SiteTree']['DEFAULTCONTACTTITLE'] = '連絡はこちらまで';
$lang['ja_JP']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>ようこそシルバーストライプへ! これはデフォルトのホームページです。貴方はこのページを編集して開始することができます。 <a href="admin/">the CMS</a>. 貴方は今アクセスしているのは <a href="http://doc.silverstripe.com">開発者向け資料</a>, またはチュートリアル <a href="http://doc.silverstripe.com/doku.php?id=tutorials">の開始</a></p>';
$lang['ja_JP']['SiteTree']['DEFAULTHOMETITLE'] = 'ホーム';
$lang['ja_JP']['SiteTree']['EDITANYONE'] = '誰でもCMSにログインが可能';
$lang['ja_JP']['SiteTree']['EDITHEADER'] = 'この中から誰をCMSの編集を可能にしますか？';
$lang['ja_JP']['SiteTree']['EDITONLYTHESE'] = 'この人達だけ (リストから選択してください)';
$lang['ja_JP']['SiteTree']['Editors'] = '編集グループ';
$lang['ja_JP']['SiteTree']['GROUP'] = 'グループ';
$lang['ja_JP']['SiteTree']['HASBROKENLINKS'] = 'このページはリンク切れがあります';
$lang['ja_JP']['SiteTree']['has_one_Parent'] = '親ページ';
$lang['ja_JP']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'ドメイン';
$lang['ja_JP']['SiteTree']['HomepageForDomain'] = 'ホームページのドメイン';
$lang['ja_JP']['SiteTree']['HTMLEDITORTITLE'] = '内容';
$lang['ja_JP']['SiteTree']['INHERIT'] = '親ページを受け継ぐ';
$lang['ja_JP']['SiteTree']['LINKSALREADYUNIQUE'] = ' %s は既にユニークです。';
$lang['ja_JP']['SiteTree']['LINKSCHANGEDTO'] = ' 変更した %s -> %s';
$lang['ja_JP']['SiteTree']['many_many_BackLinkTracking'] = 'リンク元を追跡';
$lang['ja_JP']['SiteTree']['many_many_ImageTracking'] = '画像へのリンクを追跡';
$lang['ja_JP']['SiteTree']['many_many_LinkTracking'] = 'リンクを追跡';
$lang['ja_JP']['SiteTree']['MENUTITLE'] = '操作レベル';
$lang['ja_JP']['SiteTree']['METAADVANCEDHEADER'] = '拡張オプション...';
$lang['ja_JP']['SiteTree']['METADESC'] = '説明';
$lang['ja_JP']['SiteTree']['METAEXTRA'] = 'メタタグをカスタム';
$lang['ja_JP']['SiteTree']['METAHEADER'] = '検索エンジン用メタタグ';
$lang['ja_JP']['SiteTree']['METAKEYWORDS'] = 'キーワード';
$lang['ja_JP']['SiteTree']['METANOTEPRIORITY'] = 'このページの為に、手動でGoogle Sitemapsの優先度を指定してください。
 (%s)';
$lang['ja_JP']['SiteTree']['METAPAGEPRIO'] = 'ページの重要度';
$lang['ja_JP']['SiteTree']['METATITLE'] = 'タイトル';
$lang['ja_JP']['SiteTree']['MODIFIEDONDRAFT'] = 'ドラフトサイトを変更';
$lang['ja_JP']['SiteTree']['NOBACKLINKS'] = 'このページはどこからもリンクされていません。';
$lang['ja_JP']['SiteTree']['NOTEUSEASHOMEPAGE'] = '以下のドメインをこの\'ホームページ\'が利用するとする。: 
							(コンマで複数のドメインを分けてください)';
$lang['ja_JP']['SiteTree']['PAGESLINKING'] = '次に来るページをこのページにリンクします:';
$lang['ja_JP']['SiteTree']['PAGETITLE'] = 'ページ名';
$lang['ja_JP']['SiteTree']['PAGETYPE'] = 'ページタイプ';
$lang['ja_JP']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'どのグループがページへのアクセスもしくは編集を行えるかを設定';
$lang['ja_JP']['SiteTree']['PLURALNAME'] = 'サイトのツリー構造';
$lang['ja_JP']['SiteTree']['PRIORITYLEASTIMPORTANT'] = '重要性が最も低い';
$lang['ja_JP']['SiteTree']['PRIORITYMOSTIMPORTANT'] = '最も重要';
$lang['ja_JP']['SiteTree']['PRIORITYNOTINDEXED'] = 'インデックスにありません';
$lang['ja_JP']['SiteTree']['REMOVEDFROMDRAFT'] = 'ドラフトサイトから取り除く';
$lang['ja_JP']['SiteTree']['SHOWINMENUS'] = 'メニューに表示しますか？';
$lang['ja_JP']['SiteTree']['SHOWINSEARCH'] = '検索に表示しますか？';
$lang['ja_JP']['SiteTree']['SINGULARNAME'] = 'サイトのツリー構造';
$lang['ja_JP']['SiteTree']['TABACCESS'] = 'アクセス';
$lang['ja_JP']['SiteTree']['TABBACKLINKS'] = 'バックリンクス';
$lang['ja_JP']['SiteTree']['TABBEHAVIOUR'] = '動作';
$lang['ja_JP']['SiteTree']['TABCONTENT'] = 'コンテンツ';
$lang['ja_JP']['SiteTree']['TABMAIN'] = 'メイン';
$lang['ja_JP']['SiteTree']['TABMETA'] = 'メタデータ';
$lang['ja_JP']['SiteTree']['TABREPORTS'] = 'レポート';
$lang['ja_JP']['SiteTree']['ToDo'] = 'ToDoノート';
$lang['ja_JP']['SiteTree']['TODOHELP'] = '<p>これであなたのサイト記録をとることができます。  まず左側の\'サイトレポート\'ウインドウを開き\'To Do\'を選択します。</p>';
$lang['ja_JP']['SiteTree']['TOPLEVEL'] = 'サイトの内容 (最上位層)';
$lang['ja_JP']['SiteTree']['URL'] = 'URL';
$lang['ja_JP']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'このURLは他のページで使われています。それぞれのページのURLをユニークな物にしてください。';
$lang['ja_JP']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URLはレターを作成できるだけです、桁とハイフン';
$lang['ja_JP']['SiteTree']['Viewers'] = '閲覧者のグループ';
$lang['ja_JP']['TableField']['ISREQUIRED'] = 'In %s \'%s\' が必要です.';
$lang['ja_JP']['TableField.ss']['ADD'] = '新しい行を追加';
$lang['ja_JP']['TableField.ss']['CSVEXPORT'] = 'CSVでエクスポート';
$lang['ja_JP']['TableListField']['CSVEXPORT'] = 'CSVにエクスポート';
$lang['ja_JP']['TableListField']['PRINT'] = '印刷';
$lang['ja_JP']['TableListField_PageControls.ss']['DISPLAYING'] = '表示中';
$lang['ja_JP']['TableListField_PageControls.ss']['OF'] = 'の';
$lang['ja_JP']['TableListField_PageControls.ss']['TO'] = 'へ';
$lang['ja_JP']['TableListField_PageControls.ss']['VIEWFIRST'] = '一番目を表示';
$lang['ja_JP']['TableListField_PageControls.ss']['VIEWLAST'] = '最新を表示';
$lang['ja_JP']['TableListField_PageControls.ss']['VIEWNEXT'] = '次を表示';
$lang['ja_JP']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = '前回を表示';
$lang['ja_JP']['ToggleCompositeField.ss']['HIDE'] = '非表示';
$lang['ja_JP']['ToggleCompositeField.ss']['SHOW'] = '表示';
$lang['ja_JP']['ToggleField']['LESS'] = '減少';
$lang['ja_JP']['ToggleField']['MORE'] = '増加';
$lang['ja_JP']['Translatable']['CREATE'] = '新しい翻訳の作成';
$lang['ja_JP']['Translatable']['CREATEBUTTON'] = '作成';
$lang['ja_JP']['Translatable']['EXISTING'] = '既存の翻訳:';
$lang['ja_JP']['Translatable']['NEWLANGUAGE'] = '新しい言語';
$lang['ja_JP']['Translatable']['TRANSLATIONS'] = '翻訳（生成）';
$lang['ja_JP']['TreeSelectorField']['CANCEL'] = 'キャンセル';
$lang['ja_JP']['TreeSelectorField']['SAVE'] = '保存';
$lang['ja_JP']['TypeDropdown']['NONE'] = '何もありません';
$lang['ja_JP']['Versioned']['has_many_Versions'] = 'バージョン';
$lang['ja_JP']['VirtualPage']['CHOOSE'] = 'リンクするページを選択してください';
$lang['ja_JP']['VirtualPage']['EDITCONTENT'] = 'クリックしてコンテンツを編集';
$lang['ja_JP']['VirtualPage']['HEADER'] = 'これがバーチャルページです';
$lang['ja_JP']['Widget']['PLURALNAME'] = 'ウィジェット';
$lang['ja_JP']['Widget']['SINGULARNAME'] = 'ウィジェット';
$lang['ja_JP']['WidgetArea']['PLURALNAME'] = 'ウィジェットエリア';
$lang['ja_JP']['WidgetArea']['SINGULARNAME'] = 'ウィジェットエリア';

?>
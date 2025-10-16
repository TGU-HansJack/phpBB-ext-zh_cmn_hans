<?php

/**
 * Markdown extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MARKDOWN_GUIDE' => 'Markdown 指南',

	'HELP_MARKDOWN_BLOCK_INTRO' => '简介',
	'HELP_MARKDOWN_INTRO_MARKDOWN_QUESTION' => '什么是 Markdown？',
	'HELP_MARKDOWN_INTRO_MARKDOWN_ANSWER' => 'Markdown 是一种轻量级标记语言，具有纯文本格式语法，专为网络写作者设计。它允许您轻松编写文本，而无需借助外部工具或用户界面的帮助，之后这些文本将被格式化为 HTML 并保持可读性。Markdown 可以替代或与 BBCode 格式文本结合使用。',

	'HELP_MARKDOWN_BLOCK_TEXT' => '文本格式化',
	'HELP_MARKDOWN_TEXT_BOLD_QUESTION' => '创建粗体文本',
	'HELP_MARKDOWN_TEXT_BOLD_ANSWER' => '要使文本变为粗体，请将其包含在一对 <code>**</code> 或 <code>__</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">**Hello**</code></pre> 或 <pre class="markdown-code"><code class="markdown" data-lang="markdown">__Hello__</code></pre> 将变成<br><br><strong>Hello</strong>',
	'HELP_MARKDOWN_TEXT_ITALIC_QUESTION' => '创建斜体文本',
	'HELP_MARKDOWN_TEXT_ITALIC_ANSWER' => '要使文本变为斜体，请将其包含在一对 <code>*</code> 或 <code>_</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">*Great!*</code></pre> 或 <pre class="markdown-code"><code class="markdown" data-lang="markdown">_Great!_</code></pre> 将变成<br><br><em>Great!</em>',
	'HELP_MARKDOWN_TEXT_STRIKETHROUGH_QUESTION' => '创建删除线文本',
	'HELP_MARKDOWN_TEXT_STRIKETHROUGH_ANSWER' => '要添加删除线，请将文本包含在一对 <code>~~</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">~~Good morning~~</code></pre> 将变成<br><br><del>Good morning</del>',
	'HELP_MARKDOWN_TEXT_SUBSCRIPT_QUESTION' => '创建下标文本',
	'HELP_MARKDOWN_TEXT_SUBSCRIPT_ANSWER' => '要创建下标文本，请将其包含在一对 <code>~</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">H~2~O</code></pre> 将变成<br><br>H<sub>2</sub>O',
	'HELP_MARKDOWN_TEXT_SUPERSCRIPT_QUESTION' => '创建上标文本',
	'HELP_MARKDOWN_TEXT_SUPERSCRIPT_ANSWER' => '要创建上标文本，请在文本前添加 <code>^</code>，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">2^n</code></pre> 将变成<br><br>2<sup>n</sup>',
	'HELP_MARKDOWN_TEXT_HEADER_QUESTION' => '创建标题',
	'HELP_MARKDOWN_TEXT_HEADER_ANSWER' => '要创建标题，请在文本前添加 1 到 6 个 <code>#</code> 和一个空格。数字越大，文本越小，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown"># H1<br>## H2<br>### H3<br>#### H4<br>##### H5<br>###### H6</code></pre> 将变成<br><br><h1 class="markdown">H1</h1><h2 class="markdown">H2</h2><h3 class="markdown">H3</h3><h4 class="markdown">H4</h4><h5 class="markdown">H5</h5><h6 class="markdown">H6</h6>',

	'HELP_MARKDOWN_BLOCK_CODE' => '引用和输出等宽文本',
	'HELP_MARKDOWN_QUOTE_QUESTION' => '在回复中引用文本',
	'HELP_MARKDOWN_QUOTE_ANSWER' => '要引用文本，请在文本行前添加 <code>&gt;</code> 和可选的空格，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">&gt; Quoted text</code></pre> 将变成 <blockquote class="uncited"><div><p>Quoted text</p></div></blockquote>',
	'HELP_MARKDOWN_CODE_QUESTION' => '输出代码',
	'HELP_MARKDOWN_CODE_ANSWER' => '要输出代码，请将其包含在一对 <code>```</code> 或 <code>~~~</code> 中，或者在每行前添加 4 个空格。您还可以在第一个标记中指定语言，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">```ruby<br>puts "Hello #{user}!"<br>```</code></pre> 将变成 <pre class="markdown-code"><code class="ruby" data-lang="ruby">puts "Hello #{user}!"</code></pre>',
	'HELP_MARKDOWN_CODE_INLINE_QUESTION' => '输出行内代码',
	'HELP_MARKDOWN_CODE_INLINE_ANSWER' => '要输出行内代码，请将其包含在一对 <code>`</code> 或 <code>``</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">`&lt;div&gt;` tag</code></pre> 或 <pre class="markdown-code"><code class="markdown" data-lang="markdown">``&lt;div&gt;`` tag</code></pre> 将变成<br><br><code>&lt;div&gt;</code> tag',

	'HELP_MARKDOWN_BLOCK_TABLE' => '生成表格',
	'HELP_MARKDOWN_TABLE_QUESTION' => '创建表格',
	'HELP_MARKDOWN_TABLE_ANSWER' => '要创建表格，请添加一行用 <code>|</code> 分隔的文本作为表头，然后换行用 <code>-</code> 和可选的 <code>:</code>（左对齐、居中对齐或右对齐）同样用 <code>|</code> 分隔。后续用 <code>|</code> 分隔的行将被渲染为表格行，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">| Left | Center | Right |<br>|:-----|:------:|------:|<br>|   x  |    x   |   x   |</code></pre> 或 <pre class="markdown-code"><code class="markdown" data-lang="markdown">Left|Center|Right<br>:-|:-:|-:<br>x|x|x</code></pre> 将变成<br><br><table class="markdown"><thead><tr><th style="text-align:left">Left</th><th style="text-align:center">Center</th><th style="text-align:right">Right</th></tr></thead><tbody><tr><td style="text-align:left">x</td><td style="text-align:center">x</td><td style="text-align:right">x</td></tr></tbody></table>',

	'HELP_MARKDOWN_BLOCK_SPOILER' => '生成剧透',
	'HELP_MARKDOWN_BLOCK_SPOILER_QUESTION' => '创建块状剧透',
	'HELP_MARKDOWN_BLOCK_SPOILER_ANSWER' => '要创建块状剧透，请在文本行前添加 <code>&gt;!</code> 和可选的空格。后续行可以以 <code>&gt;</code> 开头，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">&gt;! Spoiler text<br>&gt; Another line</code></pre> 将变成<br><br><details class="spoiler markdown"><p>Spoiler text<br>Another line</p></details>',
	'HELP_MARKDOWN_INLINE_SPOILER_QUESTION' => '创建行内剧透',
	'HELP_MARKDOWN_INLINE_SPOILER_ANSWER' => '要创建行内剧透，请将文本包含在 <code>&gt;!</code> 和 <code>!&lt;</code> 中，或包含在一对 <code>||</code> 中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">This is a Reddit-style &gt;!spoiler!&lt;.<br>This is a Discord-style ||spoiler||.</code></pre> 将变成<br><br><p>This is a Reddit-style <span class="spoiler markdown" onclick="removeAttribute(\'style\')" style="background:#444;color:transparent">spoiler</span>.<br>This is a Discord-style <span class="spoiler markdown" onclick="removeAttribute(\'style\')" style="background:#444;color:transparent">spoiler</span>.</p>',

	'HELP_MARKDOWN_BLOCK_LIST' => '生成列表',
	'HELP_MARKDOWN_UNORDERED_LIST_QUESTION' => '创建无序列表',
	'HELP_MARKDOWN_UNORDERED_LIST_ANSWER' => '要创建无序列表，请在每个列表项前添加 <code>*</code>、<code>-</code> 或 <code>+</code> 和一个空格。可以通过添加 4 个额外空格或一个制表符来嵌套列表，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">- Element<br>    - Subelement<br>- Element</code></pre> 将变成<br><br><ul class="markdown"><li>Element<ul class="markdown"><li>Subelement</li></ul></li><li>Element</li></ul>',
	'HELP_MARKDOWN_ORDERED_LIST_QUESTION' => '创建有序列表',
	'HELP_MARKDOWN_ORDERED_LIST_ANSWER' => '要创建有序列表，请在每个列表项前添加数字、点和空格，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">1. Element<br>    1. Subelement<br>2. Element</code></pre> 将变成<br><br><ol class="markdown"><li>Element <ol class="markdown"><li>Subelement</li></ol></li><li>Element</li></ol>',
	'HELP_MARKDOWN_TASK_LIST_QUESTION' => '创建任务列表',
	'HELP_MARKDOWN_TASK_LIST_ANSWER' => '要创建任务列表，请在每个列表项前添加 <code>*</code>、<code>-</code> 或 <code>+</code> 和一个空格，然后是 <code>[x]</code> 或 <code>[ ]</code> 和另一个空格。<code>[x]</code> 和 <code>[ ]</code> 字符将分别显示为选中框和未选中框，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">- [x] Element<br>    - [x] Subelement<br>- [ ] Element</code></pre> 将变成<br><br><ul class="markdown"><li data-task-id="x" data-task-state="checked"><input data-task-id="x" type="checkbox" checked="" disabled=""> Element<ul class="markdown"><li data-task-id="y" data-task-state="checked"><input data-task-id="y" type="checkbox" checked="" disabled=""> Subelement</li></ul></li><li data-task-id="z" data-task-state="unchecked"><input data-task-id="z" type="checkbox" disabled=""> Element</li></ul>',

	'HELP_MARKDOWN_BLOCK_LINK' => '创建链接',
	'HELP_MARKDOWN_LINK_QUESTION' => '链接到其他网站',
	'HELP_MARKDOWN_LINK_ANSWER' => '要创建链接，请将链接文本放在方括号中，然后将链接 URL 放在圆括号中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">[Link text](http://example.org)</code></pre> 将变成<br><br><a href="http://example.org">Link text</a>',

	'HELP_MARKDOWN_BLOCK_IMAGE' => '显示图片',
	'HELP_MARKDOWN_IMAGE_QUESTION' => '添加图片',
	'HELP_MARKDOWN_IMAGE_ANSWER' => '要显示图片，请添加感叹号，然后将图片替代文本放在方括号中，最后将图片 URL 放在圆括号中，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">![phpBB](https://www.phpbb.com/assets/images/images/logos/blue/160x52.png)</code></pre> 将变成<br><br><img src="https://www.phpbb.com/assets/images/images/logos/blue/160x52.png" alt="phpBB">',

	'HELP_MARKDOWN_BLOCK_EXTRA' => '附加功能',
	'HELP_MARKDOWN_HORIZONTAL_RULE_QUESTION' => '创建水平线',
	'HELP_MARKDOWN_HORIZONTAL_RULE_ANSWER' => '要创建水平线，请添加至少 3 个 <code>*</code>、<code>-</code> 或 <code>_</code>，可以用空格分隔，例如：<pre class="markdown-code"><code class="markdown" data-lang="markdown">***<br>* * *<br>---<br>- - -<br>___<br>_ _ _</code></pre> 将变成<br><br><hr>'
]);
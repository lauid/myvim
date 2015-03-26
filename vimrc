""----------------------------------------------my setting
let g:neocomplcache_enable_at_startup = 1
hi PreProc    ctermfg=DarkGreen
set tabstop=4
filetype plugin indent on
set cindent shiftwidth=4
set autoindent
"忽略大小写
set ignorecase
"删除不剪切
nmap DD "_dd
"super tab
"let g:SuperTabRetainCompletionType="context"
" 设置NerdTree
map <F3> :NERDTreeMirror<CR>
map <F3> :NERDTreeToggle<CR>

" 总是显示状态栏
set laststatus=2
" 显示光标当前位置
set ruler
" 开启行号显示
set number

" 高亮显示当前行/列
"set cursorline
"set cursorcolumn
"highlight CursorLine guibg=lightblue guifg=black ctermbg=lightgray ctermfg=black
"highlight CursorColumn guibg=lightblue ctermbg=lightgray guifg=black ctermfg=black 
"开启光亮光标行
"set cursorline
"hi CursorLine   cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white
"开启高亮光标列
"set cursorcolumn
"hi CursorColumn cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white

" 高亮显示搜索结果
set hlsearch
" 禁止折行
"set nowrap

" 开启语法高亮功能
syntax enable
" 允许用指定语法高亮配色方案替换默认方案
syntax on

" 自适应不同语言的智能缩进
" filetype indent on
" " 将制表符扩展为空格
" set expandtab
" " 设置编辑时制表符占用空格数
" set tabstop=4
" " 设置格式化时制表符占用空格数
" set shiftwidth=4
" " 让 vim 把连续数量的空格视为一个制表符
" set softtabstop=4


" 随 vim 自启动
"let g:indent_guides_enable_on_vim_startup=1
" 从第二层开始可视化显示缩进
"let g:indent_guides_start_level=2
" 色块宽度
"let g:indent_guides_guide_size=1
" 快捷键 i 开/关缩进可视化
":nmap <silent> <Leader>i <Plug>IndentGuidesToggle
"let g:Powerline_colorscheme='solarized256'
"

"DoxLic、DoxAuthor、Dox
let g:DoxygenToolkit_authorName="LGH, lgh.eng@gmail.com"
let s:licenseTag = "Copyright(C)\<enter>"
let s:licenseTag = s:licenseTag . "For free\<enter>"
let s:licenseTag = s:licenseTag . "All right reserved\<enter>"
let g:DoxygenToolkit_licenseTag = s:licenseTag
let g:DoxygenToolkit_briefTag_funcName="yes"
let g:doxygen_enhanced_color=1



let g:SuperTabMappingForward = '<s-tab>'

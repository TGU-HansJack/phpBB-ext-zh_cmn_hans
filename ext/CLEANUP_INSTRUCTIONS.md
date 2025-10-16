# 清理 phpBB 扩展目录说明

此文档说明如何清理 phpBB 扩展目录，仅保留语言文件。

## 操作说明

1. 使用提供的 Python 脚本 [cleanup_extensions.py](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/cleanup_extensions.py) 自动清理所有扩展目录
2. 脚本会遍历 ext 目录下的所有扩展，删除除 [language](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/privet/ailabs/vendor_mainpage/styles/all/template/event/overall_header_navigation_append.html#L12-L15) 目录外的所有文件和文件夹
3. 运行脚本后，每个扩展目录将只保留 [language](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/privet/ailabs/vendor_mainpage/styles/all/template/event/overall_header_navigation_append.html#L12-L15) 文件夹

## 已执行的操作

已经运行了清理脚本，完成了对所有扩展目录的清理工作。现在每个扩展目录中仅保留了 [language](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/privet/ailabs/vendor_mainpage/styles/all/template/event/overall_header_navigation_append.html#L12-L15) 文件夹，符合要求。

例如：
- `danieltj/bbcodeicons/` 目录现在只包含 [language](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/privet/ailabs/vendor_mainpage/styles/all/template/event/overall_header_navigation_append.html#L12-L15) 文件夹
- `dmzx/mchat/` 目录现在只包含 [language](file:///c:/Users/HansJack/Desktop/phpBB-ext-zh_cmn_hans/ext/privet/ailabs/vendor_mainpage/styles/all/template/event/overall_header_navigation_append.html#L12-L15) 文件夹

## 后续步骤

如需重新运行清理操作，只需执行以下命令：

```
python cleanup_extensions.py
```

注意：此操作不可逆，请确保在执行前已备份重要文件。
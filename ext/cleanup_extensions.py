#!/usr/bin/env python3
"""
清理 phpBB 扩展目录脚本
此脚本会删除扩展目录中除 language 文件夹外的所有文件和文件夹
"""

import os
import shutil

def remove_directory(path):
    """递归删除目录及其内容"""
    try:
        shutil.rmtree(path)
    except Exception as e:
        print(f"  错误删除目录 {path}: {e}")

def remove_file(path):
    """删除文件"""
    try:
        os.remove(path)
    except Exception as e:
        print(f"  错误删除文件 {path}: {e}")

def clean_extension_dirs():
    base_path = os.path.dirname(os.path.abspath(__file__))
    
    # 获取所有开发者目录
    developers = [d for d in os.listdir(base_path) 
                 if os.path.isdir(os.path.join(base_path, d)) and d not in ['.', '..']]
    
    for developer in developers:
        developer_path = os.path.join(base_path, developer)
        
        # 获取该开发者的所有扩展
        if not os.path.isdir(developer_path):
            continue
            
        extensions = [e for e in os.listdir(developer_path) 
                     if os.path.isdir(os.path.join(developer_path, e))]
        
        for extension in extensions:
            extension_path = os.path.join(developer_path, extension)
            print(f"处理扩展: {developer}/{extension}")
            
            # 检查是否存在 language 目录
            language_path = os.path.join(extension_path, 'language')
            if not os.path.exists(language_path):
                print("  警告: 找不到 language 目录，跳过此扩展")
                continue
            
            # 获取扩展目录下的所有项目（文件和文件夹）
            try:
                items = os.listdir(extension_path)
            except Exception as e:
                print(f"  错误读取目录 {extension_path}: {e}")
                continue
            
            for item in items:
                # 跳过 language 目录和基本的系统目录
                if item in ['language', '.', '..']:
                    continue
                
                item_path = os.path.join(extension_path, item)
                
                # 删除文件或文件夹
                if os.path.isdir(item_path):
                    remove_directory(item_path)
                    print(f"  删除目录: {item}")
                else:
                    remove_file(item_path)
                    print(f"  删除文件: {item}")
            
            print(f"  完成处理 {developer}/{extension}\n")
    
    print("清理完成!")

if __name__ == "__main__":
    clean_extension_dirs()
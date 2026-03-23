# sp26-413-homework-3
## **Assignment 3: Child Theme**

### **Child Themes**

A child theme is a theme that inherits from a parent themee and allows developers to make changes without having to edit the original files. This is important because if the parent theme updates, those changes won't be affected. WordPress loads the child theme first, and if a file is not found, it will fall-back to the parent theme. 

### **Template Hierarchy**

The template hierarchy is how WordPress decides which file to use when showing content. It looks for the Top template first and moves down to the general ones. When using a child theme, WordPress will check the child theme before the parent theme. In this project, the single.php and page.php files were added to the child theme, so they'll override the parent version.

### **Real-World Reflection**

In this project, the child theme improves the Metro Report website by adding new features without changing the original theme. The single post page includes an author section and related posts. A custom sidebar widget area was also added to allow more free content placement. 

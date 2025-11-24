package com.Springboot.Project1.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class AdminController {
    @GetMapping("/admin/category")
    public String categoryList(){
        return "admin/category/category-list";
    }
    @GetMapping("/admin/product")
    public String productList(){
        return "admin/product/product-list";
    }
}


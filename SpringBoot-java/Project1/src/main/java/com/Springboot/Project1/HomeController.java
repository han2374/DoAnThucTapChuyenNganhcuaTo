package com.Springboot.Project1;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {
    @GetMapping("/")
    public String index(){
        return "index";
    }
    @GetMapping("/shop")
    public String shop(){
        return "home/shop";
    }
    @GetMapping("/single")
    public String single(){
        return "home/single";
    }
    @GetMapping("/admin")
    public String admin(){
        return "admin";
    }
}


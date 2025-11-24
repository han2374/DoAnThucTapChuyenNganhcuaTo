package com.Springboot.Project1.security;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configurers.AuthorizeHttpRequestsConfigurer;
import org.springframework.security.core.userdetails.User;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.provisioning.InMemoryUserDetailsManager;
import org.springframework.security.web.SecurityFilterChain;

@Configuration
public class SecurityConfig {
    @Bean
    public InMemoryUserDetailsManager userDetailsManager() {
        UserDetails truong = User.builder()
                .username("han")
                .password("{noop}2307")
                .roles("EMPLOYEE")
                .build();
                return new InMemoryUserDetailsManager(han);
    }

    @Bean
    SecurityFilterChain filterChain(HttpSecurity http) throws Exception{
        http.authorizeHttpRequests(configurer ->
        configurer.anyRequest().authenticated() )
                .formLogin(form ->
                        form
                        .loginPage("/login")
                        .loginProcessingUrl("/")
                         .permitAll()
                )
                .logout(logout->logout.permitAll()
                );
return http.build();
    }
}
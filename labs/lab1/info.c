#include <stdio.h>

int main(void) {
  printf("Content-Type: text/html; charset=utf-8\r\n\r\n");
  printf("<!doctype html><html><head><meta charset=\"utf-8\"><title>WAPH Lab - Info</title></head><body>");
  printf("<h1>WAPH — Web Application Programming and Hacking</h1>");
  printf("<h2>Student: Nick-Fishman</h2>");
  printf("<p>Course: Web Application Programming and Hacking. This page demonstrates a C CGI rendering an HTML template.</p>");
  printf("</body></html>\n");
  return 0;
}

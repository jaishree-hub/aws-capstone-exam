output "alb_dns" {
  value = aws_lb.alb.dns_name
}

output "web_public_ips" {
  value = [for i in aws_instance.web : i.public_ip]
}

output "rds_endpoint" {
  value = aws_db_instance.mysql.address
}

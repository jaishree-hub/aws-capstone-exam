variable "region" {
  default = "us-east-1"  
}

variable "vpc_cidr" {
  default = "10.0.0.0/16"  
}

variable "public_subnets" {
  default = ["10.0.1.0/24", "10.0.2.0/24"]  
}

variable "private_subnets" {
  default = ["10.0.3.0/24", "10.0.4.0/24"]  
}

variable "my_ip" {
  description = "Your public IP in CIDR format (example: 1.2.3.4/32)"
  type        = string
}

variable "06-feb" {
  description = "Existing EC2 key pair name"
  type        = string
 
}

variable "db_username" {
  default = "admin"  
}

variable "database@123*" {
  description = "RDS password"
  type        = string
  sensitive   = true
  
}

variable "db_name" {
  default = "streamline"  
}

 Cloud-Native High Availability & Disaster Recovery Web Platform (AWS)

Project Overview

This project demonstrates the design and implementation of a **highly available
and disaster-resilient cloud-native web platform on AWS**.

The primary goal of this project is to ensure **business continuity** by designing
an architecture that can automatically recover from:
- Instance failures
- Availability Zone failures
- Complete regional outages

The application is a dynamic web platform deployed across **two AWS regions**
with automated failover using Amazon Route 53.

---

 Architecture Layout (High-Level)

Users  
↓  
Amazon Route 53 (DNS + Health Checks)  
↓  
Primary Region (Mumbai – ap-south-1)  
↓  
CloudFront (CDN)  
↓  
Application Load Balancer  
↓  
EC2 Auto Scaling Group (Multi-AZ)  
↓  
Amazon RDS (MySQL) + Redis (ElastiCache)

⬇ (On failure)

Secondary Region (US-East-1 – DR)  
↓  
Application Load Balancer  
↓  
EC2 Auto Scaling Group  
↓  
Amazon RDS (Read Replica / Standby)

---

 Architecture Summary

The platform is deployed using a **multi-region active-passive architecture**.
Mumbai (ap-south-1) acts as the primary region handling live traffic, while
US-East-1 is configured as the disaster recovery region.

Amazon Route 53 continuously monitors the health of the primary region using
health checks. If the primary region becomes unavailable, Route 53 automatically
routes traffic to the DR region.

Each region runs an independent, self-contained stack consisting of a VPC,
Application Load Balancer, Auto Scaling Group, and backend services, ensuring
rapid recovery and minimal downtime.

---

 AWS Services Used

- Amazon VPC (Multi-Region)
- Internet Gateway & NAT Gateway
- EC2, AMI, Launch Templates
- Auto Scaling Group
- Application Load Balancer (ALB)
- Amazon RDS (MySQL)
- Amazon ElastiCache (Redis)
- Amazon CloudFront
- Amazon Route 53 (Failover Routing)
- AWS IAM
- AWS Systems Manager (SSM)

---

 Key Features

- Multi-AZ High Availability
- Multi-Region Disaster Recovery
- Automatic DNS-based Failover
- Secure private networking
- Auto Scaling and self-healing
- Zero-downtime regional recovery
